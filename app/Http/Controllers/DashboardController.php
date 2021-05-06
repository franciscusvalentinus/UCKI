<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Copyright;
use App\Models\Department;
use App\Models\Design;
use App\Models\Lecturer;
use App\Models\Patent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cibm = $cbmi = $cacc = $ccom = $chtb = $ccbz = $cpsy = $cimt = $cisb = $cvcd = $cina = $cfpd = $cmed = $cftp = 0;
        $pibm = $pbmi = $pacc = $pcom = $phtb = $pcbz = $ppsy = $pimt = $pisb = $pvcd = $pina = $pfpd = $pmed = $pftp = 0;
        $dibm = $dbmi = $dacc = $dcom = $dhtb = $dcbz = $dpsy = $dimt = $disb = $dvcd = $dina = $dfpd = $dmed = $dftp = 0;
        $bibm = $bbmi = $bacc = $bcom = $bhtb = $bcbz = $bpsy = $bimt = $bisb = $bvcd = $bina = $bfpd = $bmed = $bftp = 0;
        $cp = $cd = $cdepartments = $cf = $cg = [];
        $pp = $pd = $pdepartments = $pf = $pg = [];
        $dp = $dd = $ddepartments = $df = $dg = [];
        $bp = $bd = $bdepartments = $bf = $bg = [];

        $copyrights = Copyright::pluck('helper');

        foreach ($copyrights as $c) {
            $cp[] = explode(',', $c);
        }

        foreach ($cp as $c) {
            $cd[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cd as $c) {
            $cdepartments[] = Lecturer::select('department_id')->whereIn('id', $c)->get();
        }

        foreach ($cdepartments as $c) {
            foreach ($c as $d) {
                $ce[] = $d->department_id;
            }
            $cf[] = $ce;
            unset($ce);
        }

        foreach ($cf as $c) {
            $cg[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cg as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$cibm;
                }
                elseif ($c == 2) {
                    ++$cbmi;
                }
                elseif ($c == 3) {
                    ++$cacc;
                }
                elseif ($c == 4) {
                    ++$ccom;
                }
                elseif ($c == 5) {
                    ++$chtb;
                }
                elseif ($c == 6) {
                    ++$ccbz;
                }
                elseif ($c == 7) {
                    ++$cpsy;
                }
                elseif ($c == 8) {
                    ++$cimt;
                }
                elseif ($c == 9) {
                    ++$cisb;
                }
                elseif ($c == 10) {
                    ++$cvcd;
                }
                elseif ($c == 11) {
                    ++$cina;
                }
                elseif ($c == 12) {
                    ++$cfpd;
                }
                elseif ($c == 13) {
                    ++$cmed;
                }
                elseif ($c == 14) {
                    ++$cftp;
                }
            }
        }

        $patents = Patent::pluck('helper');

        foreach ($patents as $p) {
            $pp[] = explode(',', $p);
        }

        foreach ($pp as $p) {
            $pd[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pd as $p) {
            $pdepartments[] = Lecturer::select('department_id')->whereIn('id', $p)->get();
        }

        foreach ($pdepartments as $p) {
            foreach ($p as $d) {
                $pe[] = $d->department_id;
            }
            $pf[] = $pe;
            unset($pe);
        }

        foreach ($pf as $p) {
            $pg[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pg as $d) {
            foreach ($d as $p) {
                if ($p == 1) {
                    ++$pibm;
                }
                elseif ($p == 2) {
                    ++$pbmi;
                }
                elseif ($p == 3) {
                    ++$pacc;
                }
                elseif ($p == 4) {
                    ++$pcom;
                }
                elseif ($p == 5) {
                    ++$phtb;
                }
                elseif ($p == 6) {
                    ++$pcbz;
                }
                elseif ($p == 7) {
                    ++$ppsy;
                }
                elseif ($p == 8) {
                    ++$pimt;
                }
                elseif ($p == 9) {
                    ++$pisb;
                }
                elseif ($p == 10) {
                    ++$pvcd;
                }
                elseif ($p == 11) {
                    ++$pina;
                }
                elseif ($p == 12) {
                    ++$pfpd;
                }
                elseif ($p == 13) {
                    ++$pmed;
                }
                elseif ($p == 14) {
                    ++$pftp;
                }
            }
        }

        $designs = Design::pluck('helper');

        foreach ($designs as $d) {
            $dp[] = explode(',', $d);
        }

        foreach ($dp as $d) {
            $dd[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dd as $d) {
            $ddepartments[] = Lecturer::select('department_id')->whereIn('id', $d)->get();
        }

        foreach ($ddepartments as $c) {
            foreach ($c as $d) {
                $de[] = $d->department_id;
            }
            $df[] = $de;
            unset($de);
        }

        foreach ($df as $d) {
            $dg[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dg as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$dibm;
                }
                elseif ($c == 2) {
                    ++$dbmi;
                }
                elseif ($c == 3) {
                    ++$dacc;
                }
                elseif ($c == 4) {
                    ++$dcom;
                }
                elseif ($c == 5) {
                    ++$dhtb;
                }
                elseif ($c == 6) {
                    ++$dcbz;
                }
                elseif ($c == 7) {
                    ++$dpsy;
                }
                elseif ($c == 8) {
                    ++$dimt;
                }
                elseif ($c == 9) {
                    ++$disb;
                }
                elseif ($c == 10) {
                    ++$dvcd;
                }
                elseif ($c == 11) {
                    ++$dina;
                }
                elseif ($c == 12) {
                    ++$dfpd;
                }
                elseif ($c == 13) {
                    ++$dmed;
                }
                elseif ($c == 14) {
                    ++$dftp;
                }
            }
        }

        $brands = Brand::pluck('helper');

        foreach ($brands as $b) {
            $bp[] = explode(',', $b);
        }

        foreach ($bp as $b) {
            $bd[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bd as $b) {
            $bdepartments[] = Lecturer::select('department_id')->whereIn('id', $b)->get();
        }

        foreach ($bdepartments as $b) {
            foreach ($b as $d) {
                $be[] = $d->department_id;
            }
            $bf[] = $be;
            unset($be);
        }

        foreach ($bf as $b) {
            $bg[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bg as $d) {
            foreach ($d as $b) {
                if ($b == 1) {
                    ++$bibm;
                }
                elseif ($b == 2) {
                    ++$bbmi;
                }
                elseif ($b == 3) {
                    ++$bacc;
                }
                elseif ($b == 4) {
                    ++$bcom;
                }
                elseif ($b == 5) {
                    ++$bhtb;
                }
                elseif ($b == 6) {
                    ++$bcbz;
                }
                elseif ($b == 7) {
                    ++$bpsy;
                }
                elseif ($b == 8) {
                    ++$bimt;
                }
                elseif ($b == 9) {
                    ++$bisb;
                }
                elseif ($b == 10) {
                    ++$bvcd;
                }
                elseif ($b == 11) {
                    ++$bina;
                }
                elseif ($b == 12) {
                    ++$bfpd;
                }
                elseif ($b == 13) {
                    ++$bmed;
                }
                elseif ($b == 14) {
                    ++$bftp;
                }
            }
        }

        $copyright = Copyright::all();
        $patent = Patent::all();
        $design = Design::all();
        $brand = Brand::all();

        $year = $request->keyword;
        $yearnext = $year + 1;
        $yearprev = $year - 1;
        $copyrightyear = Copyright::whereYear('tanggal_permohonan', $request->keyword)->get();
        $patentyear = Patent::whereYear('tanggal_permohonan', $request->keyword)->get();
        $designyear = Design::whereYear('tanggal_permohonan', $request->keyword)->get();
        $brandyear = Brand::whereYear('tanggal_permohonan', $request->keyword)->get();

        $datenow1 = new \DateTime();
        $datenow1->setDate($year, 8, 1);
        $finalnow1 = $datenow1->format('Y-m-d');

        $datenow2 = new \DateTime();
        $datenow2->setDate($yearprev, 8, 1);
        $finalnow2 = $datenow2->format('Y-m-d');

        $datenext = new \DateTime();
        $datenext->setDate($yearnext, 7, 31);
        $finalnext = $datenext->format('Y-m-d');

        $dateprev = new \DateTime();
        $dateprev->setDate($year, 7, 31);
        $finalprev = $dateprev->format('Y-m-d');

        $copyrightnext = Copyright::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $copyrightprev = Copyright::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();
        $patentnext = Patent::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $patentprev = Patent::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();
        $designnext = Design::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $designprev = Design::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();
        $brandnext = Brand::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $brandprev = Brand::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();

        return view('dashboard', compact('cibm', 'cbmi', 'cacc', 'ccom', 'chtb', 'ccbz', 'cpsy', 'cimt', 'cisb', 'cvcd', 'cina', 'cfpd', 'cmed', 'cftp',
            'pibm', 'pbmi', 'pacc', 'pcom', 'phtb', 'pcbz', 'ppsy', 'pimt', 'pisb', 'pvcd', 'pina', 'pfpd', 'pmed', 'pftp',
            'dibm', 'dbmi', 'dacc', 'dcom', 'dhtb', 'dcbz', 'dpsy', 'dimt', 'disb', 'dvcd', 'dina', 'dfpd', 'dmed', 'dftp',
            'bibm', 'bbmi', 'bacc', 'bcom', 'bhtb', 'bcbz', 'bpsy', 'bimt', 'bisb', 'bvcd', 'bina', 'bfpd', 'bmed', 'bftp',
        'copyright', 'patent', 'design', 'brand', 'year', 'yearnext', 'yearprev', 'copyrightyear', 'patentyear', 'designyear', 'brandyear',
        'copyrightnext', 'copyrightprev', 'patentnext', 'patentprev', 'designnext', 'designprev', 'brandnext', 'brandprev'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
