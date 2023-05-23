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
            '_route' => 'generated::rEKe81LJiaaLtjxu',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
      '/proseslogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'proseslogin',
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
      '/loginfailed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'loginfailed',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout1',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'logout2',
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
            '_route' => 'generated::S3OMwJgNbE4Pu5sC',
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
      '/dashboard/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profiladmin',
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
      '/dashboard/kurikulum' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profil kurikulum',
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
      '/dashboard/kurikulum/pemetaan/cpl-bk/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.update_pemetaan_cpl_bk',
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
      '/dashboard/kurikulum/pemetaan/cetak-pdf-cplbk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cetakpdfcplbk',
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
      '/dashboard/kurikulum/pemetaan/cetak-excel-cplbk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cetakexcelcplbk',
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
      '/dashboard/kurikulum/pemetaan/susunan-mata-kuliah/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.update_susunan_mk',
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
      '/dashboard/kurikulum/pemetaan/susunan-mata-kuliah/export/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.susunan_mk.export.pdf',
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
      '/dashboard/kurikulum/pemetaan/susunan-mata-kuliah/export/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.susunan_mk.export.excel',
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
      '/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah/export/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.organisasi_mk.export.pdf',
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
      '/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah/export/excel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.organisasi_mk.export.excel',
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
      '/dashboard/kurikulum/pemetaan/cetak-pdf-cplmk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cetakpdfcplmk',
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
      '/dashboard/kurikulum/pemetaan/cetak-excel-cplmk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.pemetaan.cetakexcelcplmk',
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
      '/dashboard/kurikulum/data/cpmk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.cpmk',
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
      '/dashboard/kurikulum/data/addCPMK' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.add_cpmk',
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
            '_route' => 'kurikulum.data.store_cpmk',
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
      '/dashboard/dosen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profildosen',
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
            '_route' => 'generated::8o7SKSAlLpMbBQO7',
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
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.email',
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
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
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
    ),
    2 => 
    array (
      0 => '{^(?|/_dusk/(?|log(?|in/([^/]++)(?:/([^/]++))?(*:48)|out(?:/([^/]++))?(*:72))|user(?:/([^/]++))?(*:98))|/dashboard/kurikulum/(?|pemetaan/cpl\\-(?|pl/export/([^/]++)(*:165)|cpmk\\-mk/(?|add_cpmk/([^/]++)(*:202)|edit_cpmk/([^/]++)(?|(*:231))))|data/(?|edit(?|ProfilLulusan/([^/]++)(?|(*:282))|CP(?|L(?|Dikti/([^/]++)(?|(*:317))|Prodi/([^/]++)(?|(*:343)))|MK/([^/]++)(?|(*:367)))|BahanKajian/([^/]++)(?|(*:400))|MataKuliah/([^/]++)(?|(*:431)))|delete(?|ProfilLulusan/([^/]++)(*:472)|CP(?|L(?|Dikti/([^/]++)(*:503)|Prodi/([^/]++)(*:525))|MK/([^/]++)(*:545))|BahanKajian/([^/]++)(*:574)|MataKuliah/([^/]++)(*:601))|profilLulusan/export/([^/]++)(*:639)|cp(?|l_(?|dikti/export/([^/]++)(*:678)|prodi/export/([^/]++)(*:707))|mk/export/([^/]++)(*:734))|bahan_kajian/export/([^/]++)(*:771)|mata_kuliah/export/([^/]++)(*:806)))|/u(?|bahpw/([^/]++)(*:835)|pdateprofile/([^/]++)(*:864))|/reset\\-password/([^/]++)(*:898))/?$}sDu',
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
      317 => 
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
      343 => 
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
      367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.edit_cpmk',
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
            '_route' => 'kurikulum.data.update_cpmk',
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
      400 => 
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
      431 => 
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
      472 => 
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
      503 => 
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
      525 => 
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
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.delete_cpmk',
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
      ),
      574 => 
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
      601 => 
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
      639 => 
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
      678 => 
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
      707 => 
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
      734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kurikulum.data.export_cpmk',
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
      771 => 
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
      806 => 
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
      ),
      835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tampilprofile',
          ),
          1 => 
          array (
            0 => 'nip',
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
      864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprofile',
          ),
          1 => 
          array (
            0 => 'nip',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
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
    'generated::rEKe81LJiaaLtjxu' => 
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
        'as' => 'generated::rEKe81LJiaaLtjxu',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'proseslogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'proseslogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@proseslogin',
        'controller' => 'App\\Http\\Controllers\\LoginController@proseslogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'proseslogin',
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
    'loginfailed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'loginfailed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@loginfailed',
        'controller' => 'App\\Http\\Controllers\\LoginController@loginfailed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'loginfailed',
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
    'logout1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout1',
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
    'logout2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout2',
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
    'generated::S3OMwJgNbE4Pu5sC' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005400000000000000000";}";s:4:"hash";s:44:"/vd+vwt2f+psibgKAbTLYM2PngJQbel3elnIe9qyOwE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S3OMwJgNbE4Pu5sC',
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
    'profiladmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@myprofile',
        'controller' => 'App\\Http\\Controllers\\LoginController@myprofile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profiladmin',
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
    'profil kurikulum' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@myprofile',
        'controller' => 'App\\Http\\Controllers\\LoginController@myprofile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profil kurikulum',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLBKController@index',
        'controller' => 'App\\Http\\Controllers\\CPLBKController@index',
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
    'kurikulum.pemetaan.update_pemetaan_cpl_bk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cpl-bk/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLBKController@update',
        'controller' => 'App\\Http\\Controllers\\CPLBKController@update',
        'as' => 'kurikulum.pemetaan.update_pemetaan_cpl_bk',
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
    'kurikulum.pemetaan.cetakpdfcplbk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cetak-pdf-cplbk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLBKController@cetakLaporanPDF',
        'controller' => 'App\\Http\\Controllers\\CPLBKController@cetakLaporanPDF',
        'as' => 'kurikulum.pemetaan.cetakpdfcplbk',
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
    'kurikulum.pemetaan.cetakexcelcplbk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cetak-excel-cplbk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLBKController@cetakLaporanExcel',
        'controller' => 'App\\Http\\Controllers\\CPLBKController@cetakLaporanExcel',
        'as' => 'kurikulum.pemetaan.cetakexcelcplbk',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SusunanMKController@index',
        'controller' => 'App\\Http\\Controllers\\SusunanMKController@index',
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
    'kurikulum.pemetaan.update_susunan_mk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/susunan-mata-kuliah/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SusunanMKController@update',
        'controller' => 'App\\Http\\Controllers\\SusunanMKController@update',
        'as' => 'kurikulum.pemetaan.update_susunan_mk',
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
    'kurikulum.pemetaan.susunan_mk.export.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/susunan-mata-kuliah/export/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SusunanMKController@exportToPDF',
        'controller' => 'App\\Http\\Controllers\\SusunanMKController@exportToPDF',
        'as' => 'kurikulum.pemetaan.susunan_mk.export.pdf',
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
    'kurikulum.pemetaan.susunan_mk.export.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/susunan-mata-kuliah/export/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SusunanMKController@exportToExcel',
        'controller' => 'App\\Http\\Controllers\\SusunanMKController@exportToExcel',
        'as' => 'kurikulum.pemetaan.susunan_mk.export.excel',
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
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrganisasiMKController@index',
        'controller' => 'App\\Http\\Controllers\\OrganisasiMKController@index',
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
    'kurikulum.pemetaan.organisasi_mk.export.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/organisasi-mata-kuliah/export/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrganisasiMKController@exportToPDF',
        'controller' => 'App\\Http\\Controllers\\OrganisasiMKController@exportToPDF',
        'as' => 'kurikulum.pemetaan.organisasi_mk.export.pdf',
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
    'kurikulum.pemetaan.organisasi_mk.export.excel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/organisasi-mata-kuliah/export/excel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\OrganisasiMKController@exportToExcel',
        'controller' => 'App\\Http\\Controllers\\OrganisasiMKController@exportToExcel',
        'as' => 'kurikulum.pemetaan.organisasi_mk.export.excel',
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
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:288:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:70:"function () {
                return \\view(\'welcome\');
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005590000000000000000";}";s:4:"hash";s:44:"OF/UHTjbxOpWevSvMPIsGYXoMoHV4JyKvQGqV+cJiBk=";}}',
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
          1 => 'role:kurikulum,admin',
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
    'kurikulum.pemetaan.cetakpdfcplmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cetak-pdf-cplmk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLMKController@cetakLaporanPDF',
        'controller' => 'App\\Http\\Controllers\\CPLMKController@cetakLaporanPDF',
        'as' => 'kurikulum.pemetaan.cetakpdfcplmk',
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
    'kurikulum.pemetaan.cetakexcelcplmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/pemetaan/cetak-excel-cplmk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CPLMKController@cetakLaporanExcel',
        'controller' => 'App\\Http\\Controllers\\CPLMKController@cetakLaporanExcel',
        'as' => 'kurikulum.pemetaan.cetakexcelcplmk',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
          1 => 'role:kurikulum,admin',
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
    'kurikulum.data.cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/cpmk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@index',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@index',
        'as' => 'kurikulum.data.cpmk',
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
    'kurikulum.data.add_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/addCPMK',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@create',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@create',
        'as' => 'kurikulum.data.add_cpmk',
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
    'kurikulum.data.store_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/kurikulum/data/addCPMK',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@store',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@store',
        'as' => 'kurikulum.data.store_cpmk',
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
    'kurikulum.data.edit_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/editCPMK/{cpmk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@edit',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@edit',
        'as' => 'kurikulum.data.edit_cpmk',
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
    'kurikulum.data.update_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/kurikulum/data/editCPMK/{cpmk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@update',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@update',
        'as' => 'kurikulum.data.update_cpmk',
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
    'kurikulum.data.delete_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/deleteCPMK/{cpmk}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@destroy',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@destroy',
        'as' => 'kurikulum.data.delete_cpmk',
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
    'kurikulum.data.export_cpmk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/kurikulum/data/cpmk/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:kurikulum,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CRUDCPMKController@export',
        'controller' => 'App\\Http\\Controllers\\CRUDCPMKController@export',
        'as' => 'kurikulum.data.export_cpmk',
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
    'profildosen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/dosen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:dosen,admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@myprofile',
        'controller' => 'App\\Http\\Controllers\\LoginController@myprofile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profildosen',
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
          1 => 'role:dosen,admin',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
        return \\view(\'welcome\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005440000000000000000";}";s:4:"hash";s:44:"/PsD+uMBJWC6s5lVdO2faXYruhkOkEnTfNaOFgNUG98=";}}',
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
          1 => 'role:dosen,admin',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:502:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:283:"function () {
        return \\view(\'content.rps\', [
            \'title\' => \'RPS\',
            \'minggu_rps_list\' => \\App\\Models\\Minggu_RPS::all(),
            \'rps_list\' => \\App\\Models\\RPS::all(),
            \'detail_rps_list\' => \\App\\Models\\Detail_RPS::all()
        ]);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005610000000000000000";}";s:4:"hash";s:44:"C50tn4dZE3hM2D+7WWIrRh0FCW+L7xl+uWJd3FNcCwc=";}}',
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
    'generated::8o7SKSAlLpMbBQO7' => 
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
          1 => 'role:dosen,admin',
        ),
        'uses' => 'PDFController@generatePDF',
        'controller' => 'PDFController@generatePDF',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8o7SKSAlLpMbBQO7',
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
    'tampilprofile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ubahpw/{nip}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@ubahpw',
        'controller' => 'App\\Http\\Controllers\\LoginController@ubahpw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tampilprofile',
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
    'updateprofile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updateprofile/{nip}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@updateprofile',
        'controller' => 'App\\Http\\Controllers\\LoginController@updateprofile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateprofile',
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
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:291:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:73:"function () {
    return \\view(\'content.login.auth.forgot-password\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005960000000000000000";}";s:4:"hash";s:44:"u1cWUWL+h/K//+V9bOrFML5PxVY24Yfb9xnmxQjSqPU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:627:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:408:"function (\\Illuminate\\Http\\Request $request) {
    $request->validate([\'email\' => \'required|email\']);

    $status = \\Illuminate\\Support\\Facades\\Password::sendResetLink(
        $request->only(\'email\')
    );

    return $status === \\Illuminate\\Support\\Facades\\Password::RESET_LINK_SENT
        ? \\back()->with([\'status\' => \\__($status)])
        : \\back()->withErrors([\'email\' => \\__($status)]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005980000000000000000";}";s:4:"hash";s:44:"7OJNEFsgH2J1r49HjKP2P2TDExMVGK18gxBVHPQ2CJA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:317:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:99:"function ($token) {
    return \\view(\'content.login.auth.reset-password\', [\'token\' => $token]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000059a0000000000000000";}";s:4:"hash";s:44:"Q85YkedlYlhK9e55iVYgNKiMTY5DpNBolzPVAMtoxns=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1121:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:902:"function (\\Illuminate\\Http\\Request $request) {
    $request->validate([
        \'token\' => \'required\',
        \'email\' => \'required|email\',
        \'password\' => \'required|min:8|confirmed\',
    ]);

    $status = \\Illuminate\\Support\\Facades\\Password::reset(
        $request->only(\'email\', \'password\', \'password_confirmation\', \'token\'),
        function ($user, $password) {
            $user->forceFill([
                \'password\' => \\Illuminate\\Support\\Facades\\Hash::make($password)
            ])->setRememberToken(\\Illuminate\\Support\\Str::random(60));

            $user->save();

            \\event(new \\Illuminate\\Auth\\Events\\PasswordReset($user));
        }
    );

    return $status === \\Illuminate\\Support\\Facades\\Password::PASSWORD_RESET
        ? \\redirect()->route(\'login\')->with(\'status\', \\__($status))
        : \\back()->withErrors([\'email\' => [\\__($status)]]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000059c0000000000000000";}";s:4:"hash";s:44:"TxZviGetCRRH0h/kgT4n7/Ttj7ZYFypCyta0rluenmE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
