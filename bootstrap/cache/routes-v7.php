<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::apM4VkbzmoRibnse',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TxH1LBQhjK2j6EQY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/bk-mk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.bk_mk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/bk-mk/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.update_pemetaan_bk_mk',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/bk-mk/exportExcel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.exportExcel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/bk-mk/exportPdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.exportPdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-bk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_bk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-bk-mk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_bk_mk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/susunan-mata-kuliah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.susunan_mata_kuliah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.organisasi_mata_kuliah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-sndikti-cpl-prodi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_sndikti_cpl_prodi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-mk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_mk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-pl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_pl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-pl/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.update_pemetaan_cpl_pl',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-cpmk-mk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.cpmk.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/pemetaan/cpl-cpmk-mk/exportexcel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.export-excel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/profilLulusan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.profil_lulusan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/addProfilLulusan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.add_pl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.store_pl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/cpl_dikti' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.cpl_sndikti',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/addCPLDikti' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.add_cpl_dikti',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.store_cpl_dikti',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/cpl_prodi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.cpl_prodi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/addCPLProdi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.add_cpl_prodi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.store_cpl_prodi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/bahan_kajian' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.bahan_kajian',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/addBahanKajian' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.add_bahan_kajian',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.store_bahan_kajian',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/mata_kuliah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.mata_kuliah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/kurikulum/data/addMataKuliah' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.add_mata_kuliah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.store_mata_kuliah',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/penilaian' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'penilaian',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/rps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rps',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generate-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MnqIBu3DCnlomGka',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_dusk/(?|log(?|in/([^/]++)(?:/([^/]++))?(*:48)|out(?:/([^/]++))?(*:72))|user(?:/([^/]++))?(*:98))|/dashboard/kurikulum/(?|pemetaan/cpl\\-(?|pl/export/([^/]++)(*:165)|cpmk\\-mk/(?|add_cpmk/([^/]++)(*:202)|edit_cpmk/([^/]++)(?|(*:231))))|data/(?|edit(?|ProfilLulusan/([^/]++)(?|(*:282))|CPL(?|Dikti/([^/]++)(?|(*:314))|Prodi/([^/]++)(?|(*:340)))|BahanKajian/([^/]++)(?|(*:373))|MataKuliah/([^/]++)(?|(*:404)))|delete(?|ProfilLulusan/([^/]++)(*:445)|CPL(?|Dikti/([^/]++)(*:473)|Prodi/([^/]++)(*:495))|BahanKajian/([^/]++)(*:524)|MataKuliah/([^/]++)(*:551))|profilLulusan/export/([^/]++)(*:589)|cpl_(?|dikti/export/([^/]++)(*:625)|prodi/export/([^/]++)(*:654))|bahan_kajian/export/([^/]++)(*:691)|mata_kuliah/export/([^/]++)(*:726))))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dusk.login',
            'guard' => NULL,
          ),
          1 => 
          array (
            0 => 'userId',
            1 => 'guard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      72 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dusk.logout',
            'guard' => NULL,
          ),
          1 => 
          array (
            0 => 'guard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      98 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dusk.user',
            'guard' => NULL,
          ),
          1 => 
          array (
            0 => 'guard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.export_cpl_pl',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk',
          ),
          1 => 
          array (
            0 => 'cpmk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cpl_cpmk_mk.cpmk.update',
          ),
          1 => 
          array (
            0 => 'cpmk',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.edit_pl',
          ),
          1 => 
          array (
            0 => 'pl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.update_pl',
          ),
          1 => 
          array (
            0 => 'pl',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.edit_cpl_dikti',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.update_cpl_dikti',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.edit_cpl_prodi',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.update_cpl_prodi',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.edit_bahan_kajian',
          ),
          1 => 
          array (
            0 => 'bk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.update_bahan_kajian',
          ),
          1 => 
          array (
            0 => 'bk',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.edit_mata_kuliah',
          ),
          1 => 
          array (
            0 => 'mk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.update_mata_kuliah',
          ),
          1 => 
          array (
            0 => 'mk',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.delete_pl',
          ),
          1 => 
          array (
            0 => 'pl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.delete_cpl_dikti',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.delete_cpl_prodi',
          ),
          1 => 
          array (
            0 => 'cpl',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.delete_bahan_kajian',
          ),
          1 => 
          array (
            0 => 'bk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.delete_mata_kuliah',
          ),
          1 => 
          array (
            0 => 'mk',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.export_pl',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.export_cpl_dikti',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.export_cpl_prodi',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.export_bahan_kajian',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.export_mata_kuliah',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'dusk.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_dusk/login/{userId}/{guard?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Laravel\\Dusk\\Http\\Controllers\\UserController@login',
        'as' => 'dusk.login',
        'controller' => 'Laravel\\Dusk\\Http\\Controllers\\UserController@login',
        'namespace' => NULL,
        'prefix' => '_dusk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dusk.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_dusk/logout/{guard?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Laravel\\Dusk\\Http\\Controllers\\UserController@logout',
        'as' => 'dusk.logout',
        'controller' => 'Laravel\\Dusk\\Http\\Controllers\\UserController@logout',
        'namespace' => NULL,
        'prefix' => '_dusk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dusk.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_dusk/user/{guard?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Laravel\\Dusk\\Http\\Controllers\\UserController@user',
        'as' => 'dusk.user',
        'controller' => 'Laravel\\Dusk\\Http\\Controllers\\UserController@user',
        'namespace' => NULL,
        'prefix' => '_dusk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::apM4VkbzmoRibnse' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005390000000000000000";}";s:4:"hash";s:44:"yKb39nHyzxVjYVnQWd5qdGWeAVz9Wv+HrP6xaQ1OYuE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::apM4VkbzmoRibnse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:294:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:76:"function () {
    return \\view(\'content.home\', [\'title\' => \'Home OBE\']);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000053b0000000000000000";}";s:4:"hash";s:44:"2WdMZj9wt5kXvGmtxQbfx2dupdR7nSFOCrMBZZXhBZg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TxH1LBQhjK2j6EQY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1128:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:909:"function () {
    // $anggota = CPL_SN_Dikti::first();
    return \\view(\'test\', [
        \'CPL_SN_Dikti\' => \\App\\Models\\CPL_SN_Dikti::first(),
        \'Profil_Lulusan\' => \\App\\Models\\Profil_Lulusan::first(),
        \'Bahan_Kajian\' => \\App\\Models\\Bahan_Kajian::first(),
        \'Mata_Kuliah\' => \\App\\Models\\Mata_Kuliah::first(),
        \'RPS\' => \\App\\Models\\RPS::first(),
        \'Detail_Peran_Dosen\' => \\App\\Models\\Detail_Peran_Dosen::all(),
        \'CPMK\' => \\App\\Models\\CPMK::first(),
        \'SubCPMK\' => \\App\\Models\\SubCPMK::first(),
        \'Minggu_RPS\' => \\App\\Models\\Minggu_RPS::first(),
        \'Detail_RPS\' => \\App\\Models\\Detail_RPS::all(),
        \'Mahasiswa\' => \\App\\Models\\Mahasiswa::first(),
        \'Kelas\' => \\App\\Models\\Kelas::first(),
        \'Semua_Kelas\' => \\App\\Models\\Kelas::all(),
        \'Detail_Nilai_Mahasiswa\' => \\App\\Models\\Detail_Nilai_Mahasiswa::all(),
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000053d0000000000000000";}";s:4:"hash";s:44:"BqOTXGR8glPbSdB/n0fPjURBVHkt0Cy8nadWWZXLEmk=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TxH1LBQhjK2j6EQY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.bk_mk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/bk-mk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BKMKController@index',
        'controller' => 'App\\Http\\Controllers\\BKMKController@index',
        'as' => 'kurikulum.pemetaan.bk_mk',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.update_pemetaan_bk_mk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/bk-mk/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BKMKController@update',
        'controller' => 'App\\Http\\Controllers\\BKMKController@update',
        'as' => 'kurikulum.pemetaan.update_pemetaan_bk_mk',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.exportExcel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/bk-mk/exportExcel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BKMKController@exportExcel',
        'controller' => 'App\\Http\\Controllers\\BKMKController@exportExcel',
        'as' => 'kurikulum.pemetaan.exportExcel',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.exportPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/bk-mk/exportPdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BKMKController@exportPdf',
        'controller' => 'App\\Http\\Controllers\\BKMKController@exportPdf',
        'as' => 'kurikulum.pemetaan.exportPdf',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_bk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-bk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:280:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () {
            return \\view(\'welcome\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005470000000000000000";}";s:4:"hash";s:44:"I/L97qoro2EV62L/1lGYe+COL1mS6hHgExA5S8zcC4Y=";}}',
        'as' => 'kurikulum.pemetaan.cpl_bk',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_bk_mk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-bk-mk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PemetaanCPLBKMK@index',
        'controller' => 'App\\Http\\Controllers\\PemetaanCPLBKMK@index',
        'as' => 'kurikulum.pemetaan.cpl_bk_mk',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.susunan_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/susunan-mata-kuliah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:280:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () {
            return \\view(\'welcome\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000054a0000000000000000";}";s:4:"hash";s:44:"Wy0c9q9LfBrCNvzm/wt0H/irw8NEW6F0bD5mmKS0y8Y=";}}',
        'as' => 'kurikulum.pemetaan.susunan_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.organisasi_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/organisasi-mata-kuliah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:280:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () {
            return \\view(\'welcome\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000054c0000000000000000";}";s:4:"hash";s:44:"irhDjbqGVJ0p6Dnwdu3Wyx1XPzeIQYQ+KqRACmHMSVk=";}}',
        'as' => 'kurikulum.pemetaan.organisasi_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_sndikti_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-sndikti-cpl-prodi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:280:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () {
            return \\view(\'welcome\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000054e0000000000000000";}";s:4:"hash";s:44:"4AQpGL6ywUGjYFDwZ5xvRdP0VbmQqsP5YnX/EyL67hw=";}}',
        'as' => 'kurikulum.pemetaan.cpl_sndikti_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_mk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-mk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLMKController@index',
        'controller' => 'App\\Http\\Controllers\\CPLMKController@index',
        'as' => 'kurikulum.pemetaan.cpl_mk',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_pl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-pl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PemetaanPlCplController@index',
        'controller' => 'App\\Http\\Controllers\\PemetaanPlCplController@index',
        'as' => 'kurikulum.pemetaan.cpl_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.update_pemetaan_cpl_pl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-pl/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PemetaanPlCplController@update',
        'controller' => 'App\\Http\\Controllers\\PemetaanPlCplController@update',
        'as' => 'kurikulum.pemetaan.update_pemetaan_cpl_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.export_cpl_pl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-pl/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PemetaanPlCplController@export',
        'controller' => 'App\\Http\\Controllers\\PemetaanPlCplController@export',
        'as' => 'kurikulum.pemetaan.export_cpl_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.index',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@index',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.add_cpmk',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@create',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.cpmk.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk/add_cpmk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.cpmk.store',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@store',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk/edit_cpmk/{cpmk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.edit_cpmk',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@edit',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.cpmk.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk/edit_cpmk/{cpmk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.cpmk.update',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@update',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.export',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@cetakpdf',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@cetakpdf',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.pemetaan.cpl_cpmk_mk.export-excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk/exportexcel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'kurikulum.pemetaan.cpl_cpmk_mk.export-excel',
        'uses' => '\\App\\Http\\Controllers\\CPMKController@exportExcel',
        'controller' => '\\App\\Http\\Controllers\\CPMKController@exportExcel',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/pemetaan/cpl-cpmk-mk',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PDFController@generatePDF',
        'controller' => 'App\\Http\\Controllers\\PDFController@generatePDF',
        'as' => 'kurikulum.',
        'namespace' => NULL,
        'prefix' => '/dashboard/kurikulum',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.profil_lulusan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/profilLulusan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@index',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@index',
        'as' => 'kurikulum.data.profil_lulusan',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.add_pl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/addProfilLulusan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@addProfilLulusan',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@addProfilLulusan',
        'as' => 'kurikulum.data.add_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.store_pl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/data/addProfilLulusan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@storeProfilLulusan',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@storeProfilLulusan',
        'as' => 'kurikulum.data.store_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.edit_pl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/editProfilLulusan/{pl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@edit',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@edit',
        'as' => 'kurikulum.data.edit_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.update_pl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/data/editProfilLulusan/{pl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@update',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@update',
        'as' => 'kurikulum.data.update_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.delete_pl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/deleteProfilLulusan/{pl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@delete',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@delete',
        'as' => 'kurikulum.data.delete_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.export_pl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/profilLulusan/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfilLulusanController@export',
        'controller' => 'App\\Http\\Controllers\\ProfilLulusanController@export',
        'as' => 'kurikulum.data.export_pl',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.cpl_sndikti' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/cpl_dikti',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@index',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@index',
        'as' => 'kurikulum.data.cpl_sndikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.add_cpl_dikti' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/addCPLDikti',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@addCPLDikti',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@addCPLDikti',
        'as' => 'kurikulum.data.add_cpl_dikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.store_cpl_dikti' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/data/addCPLDikti',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@storeCPLDikti',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@storeCPLDikti',
        'as' => 'kurikulum.data.store_cpl_dikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.edit_cpl_dikti' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/editCPLDikti/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@edit',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@edit',
        'as' => 'kurikulum.data.edit_cpl_dikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.update_cpl_dikti' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/data/editCPLDikti/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@update',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@update',
        'as' => 'kurikulum.data.update_cpl_dikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.delete_cpl_dikti' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/deleteCPLDikti/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@delete',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@delete',
        'as' => 'kurikulum.data.delete_cpl_dikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.export_cpl_dikti' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/cpl_dikti/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLDiktiController@export',
        'controller' => 'App\\Http\\Controllers\\CPLDiktiController@export',
        'as' => 'kurikulum.data.export_cpl_dikti',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/cpl_prodi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@index',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@index',
        'as' => 'kurikulum.data.cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.add_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/addCPLProdi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@addCPLProdi',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@addCPLProdi',
        'as' => 'kurikulum.data.add_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.store_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/data/addCPLProdi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@storeCPLProdi',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@storeCPLProdi',
        'as' => 'kurikulum.data.store_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.edit_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/editCPLProdi/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@edit',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@edit',
        'as' => 'kurikulum.data.edit_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.update_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/data/editCPLProdi/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@updateCPLProdi',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@updateCPLProdi',
        'as' => 'kurikulum.data.update_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.delete_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/deleteCPLProdi/{cpl}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@deleteCPLProdi',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@deleteCPLProdi',
        'as' => 'kurikulum.data.delete_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.export_cpl_prodi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/cpl_prodi/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLProdiController@export',
        'controller' => 'App\\Http\\Controllers\\CPLProdiController@export',
        'as' => 'kurikulum.data.export_cpl_prodi',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/bahan_kajian',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@index',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@index',
        'as' => 'kurikulum.data.bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.add_bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/addBahanKajian',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@addBahanKajian',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@addBahanKajian',
        'as' => 'kurikulum.data.add_bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.store_bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/data/addBahanKajian',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@storeBahanKajian',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@storeBahanKajian',
        'as' => 'kurikulum.data.store_bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.edit_bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/editBahanKajian/{bk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@editBahanKajian',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@editBahanKajian',
        'as' => 'kurikulum.data.edit_bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.update_bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/data/editBahanKajian/{bk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@updateBahanKajian',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@updateBahanKajian',
        'as' => 'kurikulum.data.update_bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.delete_bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/deleteBahanKajian/{bk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@deleteBahanKajian',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@deleteBahanKajian',
        'as' => 'kurikulum.data.delete_bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.export_bahan_kajian' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/bahan_kajian/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BahanKajianController@export',
        'controller' => 'App\\Http\\Controllers\\BahanKajianController@export',
        'as' => 'kurikulum.data.export_bahan_kajian',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/mata_kuliah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@index',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@index',
        'as' => 'kurikulum.data.mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.add_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/addMataKuliah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@addMataKuliah',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@addMataKuliah',
        'as' => 'kurikulum.data.add_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.store_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/data/addMataKuliah',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@storeMataKuliah',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@storeMataKuliah',
        'as' => 'kurikulum.data.store_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.edit_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/editMataKuliah/{mk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@editMataKuliah',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@editMataKuliah',
        'as' => 'kurikulum.data.edit_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.update_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/data/editMataKuliah/{mk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@updateMataKuliah',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@updateMataKuliah',
        'as' => 'kurikulum.data.update_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.delete_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/deleteMataKuliah/{mk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@deleteMataKuliah',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@deleteMataKuliah',
        'as' => 'kurikulum.data.delete_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kurikulum.data.export_mata_kuliah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/mata_kuliah/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MataKuliahController@export',
        'controller' => 'App\\Http\\Controllers\\MataKuliahController@export',
        'as' => 'kurikulum.data.export_mata_kuliah',
        'namespace' => NULL,
        'prefix' => 'dashboard/kurikulum/data',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'penilaian' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/penilaian',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:264:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000053f0000000000000000";}";s:4:"hash";s:44:"oiHOFxaufgDMNY0+MKGErEnlj1l22DBiusRUFgOuFIg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'penilaian',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rps' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/rps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:474:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:255:"function () {
    return \\view(\'content.rps\', [
        \'title\' => \'RPS\',
        \'minggu_rps_list\' => \\App\\Models\\Minggu_RPS::all(),
        \'rps_list\' => \\App\\Models\\RPS::all(),
        \'detail_rps_list\' => \\App\\Models\\Detail_RPS::all()
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005410000000000000000";}";s:4:"hash";s:44:"9tOFv6Lru7e1AyEVE2+CP5c8mWy51ufPr3l5rPWCD5w=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'rps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MnqIBu3DCnlomGka' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generate-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'PDFController@generatePDF',
        'controller' => 'PDFController@generatePDF',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MnqIBu3DCnlomGka',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);