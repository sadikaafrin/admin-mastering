<!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
               href="#"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.html">
                <img src="{{ asset('backend/images/brand/logo.png') }}" class="header-brand-img desktop-logo"
                     alt="logo">
                <img src="{{ asset('backend/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                     alt="logo">
            </a>
            <!-- LOGO -->
            <div class="main-header-center ms-3 d-none d-xl-block">
                <input class="form-control" placeholder="Search for results..." type="search">
                <button class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                         viewBox="0 0 24 24">
                        <path
                            d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                    </svg>
                </button>
            </div>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="dropdown d-xl-none d-md-block d-none">
                    <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                             viewBox="0 0 24 24">
                            <path fill=""
                                  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                        </svg>
                    </a>
                    <div class="dropdown-menu header-search dropdown-menu-start">
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control" placeholder="Search....">
                            <div class="input-group-text btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SEARCH -->
                <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-md-none d-flex">
                                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon"
                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                    </svg>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control"
                                               placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SEARCH -->
                            <div class="dropdown  d-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                        <path
                                                            d="M22.0482178,13.2746582c-0.1265259-0.2453003-0.4279175-0.3416138-0.6732178-0.2150879C20.1774902,13.6793823,18.8483887,14.0019531,17.5,14c-0.8480835-0.0005493-1.6913452-0.1279297-2.50177-0.3779297c-4.4887085-1.3847046-7.0050049-6.1460571-5.6203003-10.6347656c0.0320435-0.1033325,0.0296021-0.2142944-0.0068359-0.3161621C9.2781372,2.411377,8.9921875,2.2761841,8.7324219,2.3691406C4.6903076,3.800293,1.9915771,7.626709,2,11.9146729C2.0109863,17.4956055,6.5440674,22.0109863,12.125,22c4.9342651,0.0131226,9.1534424-3.5461426,9.9716797-8.4121094C22.1149292,13.4810181,22.0979614,13.3710327,22.0482178,13.2746582z M16.0877075,20.0958252c-4.5321045,2.1853027-9.9776611,0.2828979-12.1630249-4.2492065S3.6417236,5.8689575,8.1738281,3.6835938C8.0586548,4.2776489,8.0004272,4.8814087,8,5.4865723C7.9962769,10.7369385,12.2495728,14.9962769,17.5,15c1.1619263,0.0023193,2.3140869-0.2119751,3.3974609-0.6318359C20.1879272,16.8778076,18.4368896,18.9630127,16.0877075,20.0958252z" />
                                                    </svg>
                                                </span>
                                    <span class="light-layout">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                        <path
                                                            d="M6.3427734,16.9501953l-1.4140625,1.4140625c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001831,0.2598877-0.0525513,0.3535156-0.1464844l1.4140015-1.4140625c0.0024414-0.0023804,0.0047607-0.0047607,0.0071411-0.0071411c0.1932373-0.1971436,0.1900635-0.5137329-0.0071411-0.7069702C6.8526001,16.7498169,6.5360718,16.7529907,6.3427734,16.9501953z M6.3427734,7.0498047c0.0936279,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1464233c0.1952515-0.1952515,0.1953125-0.5118408,0.000061-0.7070923L5.6356812,4.9287109c-0.1943359-0.1904907-0.5054321-0.1904907-0.6998291,0C4.7386475,5.1220093,4.7354736,5.4385376,4.9287109,5.6357422L6.3427734,7.0498047z M12,5h0.0006104C12.2765503,4.9998169,12.5001831,4.776001,12.5,4.5v-2C12.5,2.223877,12.276123,2,12,2s-0.5,0.223877-0.5,0.5v2.0006104C11.5001831,4.7765503,11.723999,5.0001831,12,5z M17.3037109,7.1962891c0.1326294,0.0001831,0.2598877-0.0525513,0.3535156-0.1464844l1.4140625-1.4141235c0.0023804-0.0023193,0.0047607-0.0046997,0.0070801-0.0070801c0.1932983-0.1972046,0.1900635-0.5137329-0.0070801-0.7070312c-0.1972046-0.1932373-0.5137329-0.1900635-0.7070312,0.0071411l-1.4140625,1.4140625c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546C16.803772,6.9723511,17.0275879,7.196228,17.3037109,7.1962891z M5,12c0-0.276123-0.223877-0.5-0.5-0.5h-2C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h2C4.776123,12.5,5,12.276123,5,12z M17.6572266,16.9502563c-0.0023804-0.0023804-0.0046997-0.0047607-0.0070801-0.0070801c-0.1972046-0.1932983-0.5137329-0.1901245-0.7070312,0.0070801c-0.1932373,0.1971436-0.1901245,0.5136719,0.0070801,0.7069702l1.4140625,1.4140625c0.0936279,0.0939331,0.2208252,0.1466675,0.3534546,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1463623c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L17.6572266,16.9502563z M12,19c-0.276123,0-0.5,0.223877-0.5,0.5v2.0005493C11.5001831,21.7765503,11.723999,22.0001831,12,22h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-2C12.5,19.223877,12.276123,19,12,19z M21.5,11.5h-2c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h2c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,11.5,21.5,11.5z M12,6.5c-3.0375366,0-5.5,2.4624634-5.5,5.5s2.4624634,5.5,5.5,5.5c3.0360107-0.0037842,5.4962158-2.4639893,5.5-5.5C17.5,8.9624634,15.0375366,6.5,12,6.5z M12,16.5c-2.4852905,0-4.5-2.0147095-4.5-4.5S9.5147095,7.5,12,7.5c2.4841309,0.0026855,4.4973145,2.0158691,4.5,4.5C16.5,14.4852905,14.4852905,16.5,12,16.5z" />
                                                    </svg>
                                                </span>
                                </a>
                            </div>

                            <!-- SHORTCUTS -->
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M8.5,21H3v-5.5C3,15.223877,2.776123,15,2.5,15S2,15.223877,2,15.5v6.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h6C8.776123,22,9,21.776123,9,21.5S8.776123,21,8.5,21z M8.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v6.0005493C2.0001831,8.7765503,2.223999,9.0001831,2.5,9h0.0006104C2.7765503,8.9998169,3.0001831,8.776001,3,8.5V3h5.5C8.776123,3,9,2.776123,9,2.5S8.776123,2,8.5,2z M21.5,15c-0.276123,0-0.5,0.223877-0.5,0.5V21h-5.5c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h6.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-6C22,15.223877,21.776123,15,21.5,15z M21.5,2h-6C15.223877,2,15,2.223877,15,2.5S15.223877,3,15.5,3H21v5.5005493C21.0001831,8.7765503,21.223999,9.0001831,21.5,9h0.0006104C21.7765503,8.9998169,22.0001831,8.776001,22,8.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z" />
                                    </svg>
                                </a>
                            </div>
                            <!-- FULL-SCREEN -->
                            <div class="dropdown  d-flex shopping-cart">
                                <a href="javascript:void(0);" class="nav-link icon text-center"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M9,18c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C11,18.8954468,10.1045532,18,9,18z M9,21c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C10,20.5523071,9.5523071,21,9,21z M17,18c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C19,18.8954468,18.1045532,18,17,18z M17,21c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C18,20.5523071,17.5523071,21,17,21z M19.4985352,12.0502319l1.9848633-7.4213257c0.0111694-0.0419312,0.0167847-0.085083,0.0167847-0.128479C21.5002441,4.2241211,21.2763062,4.000061,21,4H5.9198608L5.4835205,2.371582C5.4249268,2.1530151,5.2268677,2.0009766,5.0005493,2.0009766H3.5048218C3.5031128,2.0009766,3.501709,2,3.5,2C3.223877,2,3,2.223877,3,2.5S3.223877,3,3.5,3v0.0009766L4.6162109,3l2.579834,9.6288452C7.2546387,12.8477783,7.453064,13,7.6796875,13H11h6.8603516H19c0.8284302,0,1.5,0.6715698,1.5,1.5S19.8284302,16,19,16H5c-0.276123,0-0.5,0.223877-0.5,0.5S4.723877,17,5,17h14c1.3807373,0,2.5-1.1192627,2.5-2.5C21.5,13.2900391,20.6403809,12.2813721,19.4985352,12.0502319z M18.4761963,12h-0.6158447H11H8.0634766L6.1878052,5h14.1608276L18.4761963,12z" />
                                    </svg>
                                    <span class="badge bg-info header-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-15 text-dark">Shopping Cart</h6>
                                            <div class="ms-auto">
                                                            <span
                                                                class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill">
                                                                <a href="javascript:void(0);"
                                                                   class="showall-text text-white">Remove All</a>
                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-dropdown-list cart-menu ps4 overflow-hidden">
                                        <a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span
                                                            class="avatar avatar-lg br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('backend/images/ecommerce/1.jpg') }}"></span>
                                            <div class="wp-60 cart-desc mt-1">
                                                <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">TrueBasket
                                                    Metal Single Pot</p>
                                                <p class="fs-12 fw-300 lh-1 mb-0">Status: <span
                                                        class="text-green">In Stock</span></p>
                                                <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 01</span>
                                            </div>
                                            <div class="ms-auto text-end d-flex fs-16">
                                                            <span
                                                                class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $129
                                                            </span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span
                                                            class="avatar avatar-lg br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="backend/images/ecommerce/2.jpg"></span>
                                            <div class="wp-60 cart-desc mt-1">
                                                <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Authentic
                                                    chair with Canopy</p>
                                                <p class="fs-12 fw-300 lh-1 mb-0">Status: <span
                                                        class="text-green">In Stock</span></p>
                                                <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 03</span>
                                            </div>
                                            <div class="ms-auto text-end d-flex fs-16">
                                                            <span
                                                                class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $99
                                                            </span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span
                                                            class="avatar avatar-lg br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('backend/images/ecommerce/3.jpg') }}"></span>
                                            <div class="wp-60 cart-desc mt-1">
                                                <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Casual
                                                    Sneakers Canvas</p>
                                                <p class="fs-12 fw-300 lh-1 mb-0">Status: <span
                                                        class="text-green">In Stock</span></p>
                                                <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 03</span>
                                            </div>
                                            <div class="ms-auto text-end d-flex fs-16">
                                                            <span
                                                                class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $299
                                                            </span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span
                                                            class="avatar avatar-lg br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{asset('backend/images/ecommerce/4.jpg')}}"></span>
                                            <div class="wp-60 cart-desc mt-1">
                                                <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Branded
                                                    Head Phones</p>
                                                <p class="fs-12 fw-300 lh-1 mb-0">Status: <span
                                                        class="text-danger">No Stock</span></p>
                                                <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 01</span>
                                            </div>
                                            <div class="ms-auto text-end d-flex fs-16">
                                                            <span
                                                                class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $249
                                                            </span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span
                                                            class="avatar avatar-lg br-5 me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('backend/images/ecommerce/5.jpg') }}"></span>
                                            <div class="wp-60 cart-desc mt-1">
                                                <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">camera
                                                    lens (16mm f/1.4)</p>
                                                <p class="fs-12 fw-300 lh-1 mb-0">Status: <span
                                                        class="text-green">In Stock</span></p>
                                                <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 02</span>
                                            </div>
                                            <div class="ms-auto text-end d-flex fs-16">
                                                            <span
                                                                class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $1,279
                                                            </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <div class="text-center p-3">
                                        <a class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- CART -->
                            <div class="dropdown d-md-flex message">
                                <a href="javascript:void(0);" class="nav-link icon text-center"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M17.4541016,11H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,11,17.4541016,11z M19.5,2h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h12.7930298l3.8534546,3.8535156C21.2402344,21.9473267,21.3673706,22,21.5,22c0.276123,0,0.5-0.223877,0.5-0.5v-17C21.9987183,3.119812,20.880188,2.0012817,19.5,2z M21,20.2929688l-3.1464844-3.1464844C17.7597656,17.0526733,17.6326294,17,17.5,17h-13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V20.2929688z M17.4541016,8H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,8,17.4541016,8z" />
                                    </svg>
                                    <span class="pulse-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                     data-bs-popper="none">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-15 text-dark">Messages</h6>
                                            <div class="ms-auto">
                                                            <span
                                                                class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill">
                                                                <a href="javascript:void(0);"
                                                                   class="showall-text text-white">Clear</a> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-menu ps2 overflow-hidden">
                                        <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('backend/images/users/1.jpg') }}"></span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Hawaii Hilton</h5>
                                                    <small class="text-muted ms-auto text-end"> 11.07 am
                                                    </small>
                                                </div>
                                                <span class="fs-12 text-muted">Wanted to submit project by
                                                                tomorrow....</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{asset('backend/images/users/15.jpg')}}">
                                                        </span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Hermoini</h5>
                                                    <small class="text-muted ms-auto text-end"> 12.32 am
                                                    </small>
                                                </div>
                                                <span class="fs-12 text-muted">Planning for next big
                                                                update......</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('backend/images/users/12.jpg') }}">
                                                        </span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Buenda osas</h5>
                                                    <small class="text-muted ms-auto text-end"> 2:17 am
                                                    </small>
                                                </div>
                                                <span class="fs-12 text-muted">Ready to submit future
                                                                data...</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ asset('backend/images/users/4.jpg') }}">
                                                        </span>
                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Gabby gibson</h5>
                                                    <small class="text-muted ms-auto text-end"> 7:55 am
                                                    </small>
                                                </div>
                                                <span class="fs-12 text-muted">Cleared all statistics from
                                                                last year......</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <div class="text-center p-3">
                                        <a class="btn btn-primary">View All Messages</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Messages-->
                            <div class="dropdown d-md-flex notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M18,14.1V10c0-3.1-2.4-5.7-5.5-6V2.5C12.5,2.2,12.3,2,12,2s-0.5,0.2-0.5,0.5V4C8.4,4.3,6,6.9,6,10v4.1c-1.1,0.2-2,1.2-2,2.4v2C4,18.8,4.2,19,4.5,19h3.7c0.5,1.7,2,3,3.8,3c1.8,0,3.4-1.3,3.8-3h3.7c0.3,0,0.5-0.2,0.5-0.5v-2C20,15.3,19.1,14.3,18,14.1z M7,10c0-2.8,2.2-5,5-5s5,2.2,5,5v4H7V10z M13,20.8c-1.6,0.5-3.3-0.3-3.8-1.8h5.6C14.5,19.9,13.8,20.5,13,20.8z M19,18H5v-1.5C5,15.7,5.7,15,6.5,15h11c0.8,0,1.5,0.7,1.5,1.5V18z" />
                                    </svg>
                                    <span class=" pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-15 text-dark">Notifications</h6>
                                            <div class="ms-auto">
                                                            <span
                                                                class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill">
                                                                <a href="javascript:void(0);"
                                                                   class="showall-text text-white">Clear</a> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notifications-menu ps3 overflow-hidden">
                                        <a class="dropdown-item" href="chat.html">
                                            <div class="notification-each d-flex">
                                                <div class="me-3 notifyimg  bg-primary brround">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         enable-background="new 0 0 24 24"
                                                         viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.4541016,11H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,11,17.4541016,11z M19.5,2h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h12.7930298l3.8534546,3.8535156C21.2402344,21.9473267,21.3673706,22,21.5,22c0.276123,0,0.5-0.223877,0.5-0.5v-17C21.9987183,3.119812,20.880188,2.0012817,19.5,2z M21,20.2929688l-3.1464844-3.1464844C17.7597656,17.0526733,17.6326294,17,17.5,17h-13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V20.2929688z M17.4541016,8H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,8,17.4541016,8z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                                <span class="notification-label mb-1">New Message
                                                                    Received</span>
                                                    <span class="notification-subtext text-muted">2 hours
                                                                    ago</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="chat.html">
                                            <div class="notification-each d-flex">
                                                <div class="me-3 notifyimg  bg-secondary brround">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         enable-background="new 0 0 24 24"
                                                         viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.5078125,22.9736328h-12.5c-2.2081909-0.0023804-3.9976196-1.7918091-4-4v-8.5c0-0.276123-0.223877-0.5-0.5-0.5s-0.5,0.223877-0.5,0.5v8.5c0.0032349,2.7600708,2.2399292,4.9967651,5,5h12.5c0.276123,0,0.5-0.223877,0.5-0.5S17.7839355,22.9736328,17.5078125,22.9736328z M21.0078125,3.9736328h-14c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-10C24.0059814,5.3175049,22.6639404,3.9754639,21.0078125,3.9736328z M7.0078125,4.9736328h14c0.3700562,0.0004883,0.7122192,0.1081543,1.0094604,0.2835693l-6.9489136,6.9489136c-0.5864868,0.5839844-1.534668,0.5839844-2.1210938,0L5.9985962,5.256958C6.2957764,5.081665,6.6378784,4.9740601,7.0078125,4.9736328z M23.0078125,16.9736328c-0.0014038,1.1039429-0.8959961,1.9985352-2,2h-14c-1.1040649-0.0012817-1.9987183-0.8959351-2-2v-10c0.0004272-0.3701782,0.1082153-0.7124634,0.2836914-1.0097656l6.9487305,6.9492188c0.4683838,0.4692993,1.1045532,0.7325439,1.7675781,0.7314453c0.6630249,0.0010986,1.2991333-0.262146,1.7675781-0.7314453l6.9488525-6.9489136c0.175415,0.2972412,0.2830811,0.6394043,0.2835693,1.0094604V16.9736328z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                                <span class="notification-label mb-1">New Mail
                                                                    Received</span>
                                                    <span class="notification-subtext text-muted">1 week
                                                                    ago</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="cart.html">
                                            <div class="notification-each d-flex">
                                                <div class="me-3 notifyimg  bg-info brround">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         enable-background="new 0 0 24 24"
                                                         viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                                <span class="notification-label mb-1">New Order
                                                                    Received</span>
                                                    <span class="notification-subtext text-muted">1 day
                                                                    ago</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="blog-details.html">
                                            <div class="notification-each d-flex">
                                                <div class="me-3 notifyimg  bg-warning brround">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         enable-background="new 0 0 24 24"
                                                         viewBox="0 0 24 24">
                                                        <path
                                                            d="M8,13c-0.276123,0-0.5,0.223877-0.5,0.5v2c0,0.0001831,0,0.0003662,0,0.0005493C7.5001831,15.7765503,7.723999,16.0001831,8,16c0.0001831,0,0.0003662,0,0.0006104,0C8.2765503,15.9998169,8.5001831,15.776001,8.5,15.5v-2C8.5,13.223877,8.276123,13,8,13z M12,10c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,15.7765503,11.723999,16.0001831,12,16c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-5C12.5,10.223877,12.276123,10,12,10z M19.4152832,5.2902832c-3.7055054-4.09552-10.02948-4.4117432-14.125-0.7062988c-4.09552,3.7055054-4.4117432,10.02948-0.7062988,14.125l-2.4375,2.4375c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C2,21.776062,2.223877,21.999939,2.5,22H12c2.4794312-0.000061,4.8704224-0.9212646,6.7089844-2.5847168C22.8045654,15.7097778,23.1207275,9.3858032,19.4152832,5.2902832z M12,21H3.7069702l1.928772-1.9287109c0.000061-0.000061,0.0001221-0.0001221,0.0001221-0.0001831c0.1951904-0.1952515,0.1951294-0.5117188-0.0001221-0.7068481C3.9483643,16.6768799,3.0002441,14.3883667,3,12.0020142c-0.0005493-4.9700317,4.0279541-8.9994507,8.9979858-9c4.9699707-0.0005493,8.9994507,4.0279541,9,8.9979858C20.9985352,16.9699707,16.9700317,20.9994507,12,21z M16,8c-0.276123,0-0.5,0.223877-0.5,0.5v7c0,0.0001831,0,0.0003662,0,0.0005493C15.5001831,15.7765503,15.723999,16.0001831,16,16c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-7C16.5,8.223877,16.276123,8,16,8z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                                <span class="notification-label mb-1">New Comment
                                                                    Received</span>
                                                    <span class="notification-subtext text-muted">1 day
                                                                    ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <div class="text-center p-3">
                                        <a class="btn btn-primary">View All Notifications</a>
                                    </div>
                                </div>
                            </div>
                            <!-- NOTIFICATIONS -->
                            <div class="dropdown d-md-flex profile-1">
                                <a href="#" data-bs-toggle="dropdown"
                                   class="nav-link pe-2 leading-none d-flex animate">
                                                <span>
                                                    <img src="{{asset('backend/images/faces/6.jpg')}}" alt="profile-user"
                                                         class="avatar  profile-user brround cover-image">
                                                </span>
                                    <div class="text-center p-1 d-flex d-lg-none-max">
                                        <h6 class="mb-0" id="profile-heading">Elena<i
                                                class="user-angle ms-1 fa fa-angle-down "></i></h6>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <a class="dropdown-item" href="profile.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                             enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z" />
                                        </svg>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="mail-compose.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                             enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z" />
                                        </svg>
                                        My Wallet
                                        <span class="badge bg-secondary float-end">3</span>
                                    </a>
                                    <a class="dropdown-item" href="mail-inbox.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                             enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M12,8.5c-1.9329834,0-3.5,1.5670166-3.5,3.5s1.5670166,3.5,3.5,3.5c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5C15.5,10.0670166,13.9329834,8.5,12,8.5z M12,14.5c-1.3807373,0-2.5-1.1192627-2.5-2.5s1.1192627-2.5,2.5-2.5c1.380127,0.0014648,2.4985352,1.119873,2.5,2.5C14.5,13.3807373,13.3807373,14.5,12,14.5z M21.1582031,10.0253906l-1.8867188-0.6289062c-0.0222168-0.0074463-0.0439453-0.0164185-0.0648804-0.0268555c-0.2470093-0.12323-0.3474121-0.4234009-0.2241821-0.6704102l0.8896484-1.7783203c0.0960083-0.1925659,0.0582275-0.4248657-0.09375-0.5771484l-2.1210938-2.1220703c-0.1524658-0.1516113-0.3845215-0.1893311-0.5771484-0.09375l-1.7792969,0.8896484c-0.0209961,0.010437-0.0426636,0.0194092-0.0648804,0.0268555c-0.2618408,0.0874023-0.5449829-0.0540771-0.6323853-0.315918l-0.6289062-1.8867188C13.90625,2.6377563,13.71521,2.5001831,13.5,2.5h-3c-0.21521-0.0001221-0.40625,0.1376343-0.4741821,0.3417969L9.3969116,4.7285156C9.3518677,4.8665161,9.24823,4.9776001,9.1137085,5.0322266c-0.1335449,0.057373-0.2857666,0.052002-0.414978-0.0146484L6.9204102,4.1279297c-0.1925049-0.0960693-0.4249268-0.0583496-0.5771484,0.09375L4.2216797,6.34375c-0.1522217,0.1521606-0.1900024,0.3846436-0.09375,0.5771484l0.8896484,1.7783203c0.0107422,0.0214233,0.0198975,0.0435791,0.0274658,0.0662842c0.086792,0.2616577-0.0548706,0.5441284-0.3165283,0.6309814l-1.8867188,0.6289062C2.6377563,10.09375,2.5001831,10.28479,2.5,10.5v3c0.0001831,0.21521,0.1377563,0.40625,0.3417969,0.4746094l1.8862305,0.6289062c0.0224609,0.0074463,0.0444336,0.0165405,0.0656128,0.0270996c0.2468872,0.12323,0.347168,0.4232788,0.223938,0.670166l-0.8896484,1.7783203c-0.0962524,0.1925049-0.0584717,0.4249878,0.09375,0.5771484l2.1216431,2.1220703c0.1523438,0.1519165,0.3845825,0.1896362,0.5771484,0.09375l1.7783203-0.8896484c0.1289673-0.067627,0.2816162-0.072998,0.4150391-0.0146484c0.1344604,0.0546265,0.2380981,0.1657104,0.2831421,0.3037109l0.6289062,1.8867188C10.093811,21.3623657,10.2848511,21.500061,10.5,21.5h3c0.21521-0.0001831,0.40625-0.1378174,0.4746094-0.3418579l0.6289062-1.8867188c0.0074463-0.0222168,0.0164185-0.0438843,0.0268555-0.0648804c0.12323-0.2470093,0.4234009-0.3474121,0.6704102-0.2241821l1.7792969,0.8896484c0.192688,0.0950928,0.4244995,0.0574341,0.5771484-0.09375l2.1210938-2.1220703c0.1519775-0.1522217,0.1897583-0.3845825,0.09375-0.5771484l-0.8896484-1.7783203c-0.0651855-0.1295776-0.0705566-0.2811279-0.0146484-0.414978c0.0546265-0.1342773,0.1657715-0.2375488,0.3037109-0.2822266l1.8867188-0.6289062C21.3622437,13.90625,21.4998169,13.71521,21.5,13.5v-3C21.4998169,10.28479,21.3622437,10.09375,21.1582031,10.0253906z M20.5,13.1396484l-1.5449219,0.5146484c-0.0671997,0.0223999-0.1326904,0.0495605-0.1960449,0.0811768c-0.7410889,0.3704224-1.0415649,1.2714844-0.6711426,2.0125732l0.7285156,1.4560547l-1.6113281,1.6123047l-1.4570312-0.7285156c-0.0639648-0.0320435-0.130127-0.0594482-0.197998-0.0820312c-0.7856445-0.2613525-1.6343994,0.1636353-1.895752,0.9492188L13.1396484,20.5h-2.2792969l-0.5151978-1.5449219c-0.0223389-0.0669556-0.0493774-0.1322021-0.0809326-0.1953125c-0.3702393-0.741394-1.2714233-1.0421753-2.0128174-0.671875l-1.4559937,0.7285156l-1.6118164-1.6123047l0.7285156-1.4560547c0.0314941-0.0631104,0.0585327-0.128418,0.0808716-0.1953125c0.2622681-0.7861938-0.1623535-1.6361084-0.9485474-1.8984375L3.5,13.1396484v-2.2792969l1.5449219-0.5145874c0.0666504-0.0222778,0.1317139-0.0492554,0.1945801-0.0806274c0.7416382-0.3701782,1.0427856-1.2714844,0.6726074-2.0131226L5.1835938,6.7958984l1.6118774-1.6123047l1.4559937,0.7285156C8.3145752,5.9436646,8.3798218,5.9707031,8.4467773,5.993042c0.7860718,0.2623901,1.6359863-0.1620483,1.8984375-0.9481201L10.8603516,3.5h2.2792969l0.5147095,1.5449219c0.022583,0.0678711,0.0499878,0.1340332,0.0820312,0.197998c0.3707275,0.7403564,1.2713623,1.039917,2.0117188,0.6691895l1.4569702-0.7285156l1.6113281,1.6123657l-0.7285156,1.4560547c-0.0320435,0.0639038-0.0594482,0.1300659-0.0820312,0.197937c-0.2613525,0.7856445,0.1636353,1.6343384,0.9492188,1.895752L20.5,10.8603516V13.1396484z" />
                                        </svg>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="faq.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                             enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M2.5,9c0.0001831,0,0.0003662,0,0.0006104,0C2.7765503,8.9998169,3.0001831,8.776001,3,8.5V3h5.5C8.776123,3,9,2.776123,9,2.5S8.776123,2,8.5,2h-6C2.4998169,2,2.4996338,2,2.4993896,2C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v6c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,8.7765503,2.223999,9.0001831,2.5,9z M8.5,21H3v-5.5C3,15.223877,2.776123,15,2.5,15S2,15.223877,2,15.5v6c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h6C8.776123,22,9,21.776123,9,21.5S8.776123,21,8.5,21z M21.5,2h-6C15.223877,2,15,2.223877,15,2.5S15.223877,3,15.5,3H21v5.5c0,0.0001831,0,0.0003662,0,0.0005493C21.0001831,8.7765503,21.223999,9.0001831,21.5,9c0.0001831,0,0.0003662,0,0.0006104,0C21.7765503,8.9998169,22.0001831,8.776001,22,8.5v-6c0-0.0001831,0-0.0003662,0-0.0006104C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M17,16v-4c-0.0014038-1.1040039-0.8959961-1.9985962-2-2V9c0-1.6568604-1.3431396-3-3-3S9,7.3431396,9,9v1c-1.1040039,0.0014038-1.9985962,0.8959961-2,2v4c0.0014038,1.1040039,0.8959961,1.9985962,2,2h6C16.1040039,17.9985962,16.9985962,17.1040039,17,16z M10,9c0-1.1045532,0.8954468-2,2-2s2,0.8954468,2,2v1h-4V9z M8,16v-4c0.0003662-0.552124,0.447876-0.9996338,1-1h0.5h5h0.0006104H15c0.552124,0.0003662,0.9996338,0.447876,1,1v4c-0.0003662,0.552124-0.447876,0.9996338-1,1H9C8.447876,16.9996338,8.0003662,16.552124,8,16z M21.5,15c-0.276123,0-0.5,0.223877-0.5,0.5V21h-5.5c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h6c0.0001831,0,0.0003662,0,0.0006104,0C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-6C22,15.223877,21.776123,15,21.5,15z" />
                                        </svg>
                                        Lock Screen
                                    </a>
                                    <a class="dropdown-item" href="login.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                             enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z" />
                                        </svg>
                                        Log out
                                    </a>
                                </div>
                            </div>
                            <!-- Profile -->
                        </div>
                    </div>
                </div>
                <div class="demo-icon nav-link icon fe-spin">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                         viewBox="0 0 24 24">
                        <path
                            d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->
