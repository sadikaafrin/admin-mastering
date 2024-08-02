<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DynamicPage;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class DynamicPageController extends Controller
{
    /**
     * Display a listing of the dynamic pages.
     *
     * @param Request $request
     */



    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DynamicPage::latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('page_content', function ($data) {
                    $page_content       = $data->page_content;
                    $short_page_content = strlen($page_content) > 100 ? substr($page_content, 0, 100) . '...' : $page_content;
                    return '<p>' . $short_page_content . '</p>';
                })
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch">';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <a href="' . route('dynamic_page.edit', ['id' => $data->id]) . '" type="button" class="btn btn-primary text-white" title="Edit">
                              <i class="fa fa-edit"></i>
                              </a>
                              <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                              <i class="fa fa-trash"></i>


                            </a>
                            </div>';
                })
                ->rawColumns(['page_content', 'status', 'action'])
                ->make();
        }

        return view('backend.layouts.settings.dynamic_page.index');
    }


    /**
     * Show the form for creating a new dynamic page.
     *
     */
    public function create()
    {
        return view('backend.layouts.settings.dynamic_page.create');
    }

    /**
     * Store a newly created dynamic page in the database.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'page_title' => 'required|string|max:100',
                'page_content' => 'required|string',
            ]);

            // If validation fails, redirect back with errors and input data

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = new DynamicPage();
            $data->page_title = $request->page_title;
            $data->page_slug = Str::slug($request->page_title);
            $data->page_content = $request->page_content;
            $data->save();

            return redirect()->route('dynamic_page.index')->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->route('dynamic_page.index')->with('t-success', 'Dynamic Page failed created.');
        }
    }



    /**
     * Show the form for editing the specified dynamic page.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = DynamicPage::find($id);
        return view('backend.layouts.settings.dynamic_page.edit', compact('data'));
    }

    /**
     * Update the specified dynamic page in the database.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'page_title' => 'required|string|max:100',
                'page_content' => 'required|string',
            ]);

            // If validation fails, redirect back with errors and input data
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $data = DynamicPage::findOrFail($id);
            $data->page_title = $request->page_title;
            $data->page_slug = Str::slug($request->page_title);
            $data->page_content = $request->page_content;
            $data->update();

            return redirect()->route('dynamic_page.index')->with('t-success', 'Dynamic Page Updated Successfully.');

        } catch (Exception $e) {
            return redirect()->route('dynamic_page.index')->with('t-success', 'Dynamic Page failed to update');
        }
    }
    /**
     * Remove the specified dynamic page from the database.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse {
        try {
            $data = DynamicPage::findOrFail($id);
            $data->delete();

            return response()->json([
                'success' => true,
                'message' => 'Dynamic Page deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the Dynamic Page.',
            ]);
        }
    }

    /**
     * Change the status of the specified dynamic page.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function status(int $id): JsonResponse {
        $data = DynamicPage::findOrFail($id);
        if ($data->status == 'active') {
            $data->status = 'inactive';
            $data->save();

            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'active';
            $data->save();

            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        }
    }

}
