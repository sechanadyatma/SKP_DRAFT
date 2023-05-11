<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\ClassGol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PegawaiCreateRequest;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        // eloquent orm (rekomendasi)
        // query builder
        // raw query
        $keyword = $request->keyword;
        
        $pegawai = Pegawai::with('class')
                            ->where('name', 'LIKE', '%'.$keyword. '%')
                            ->orwhere('nip', 'LIKE', '%'.$keyword.'%')
                            ->orWhereHas('class', function($query) use($keyword) {
                              $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->paginate(10);
        return view('pegawai', ['pegawaiList' => $pegawai]);
    }

    public function show($id)
    {
      $pegawai = Pegawai::with(['class'])
              ->findOrFail($id);
      return view('pegawai-detail', ['pegawai' => $pegawai]);
    }

    public function create()
    {
      $class = ClassGol::select('id', 'name')->get();
      return view('pegawai-add', ['class' => $class]);
    }
    public function store(PegawaiCreateRequest $request)
    {
      // $pegawai = new Pegawai;
      // $pegawai->name = $request->name;
      // $pegawai->nip = $request->nip;
      // $pegawai->gender = $request->gender;
      // $pegawai->class_id = $request->class_id;
      // $pegawai->save(); 

      $newName = '';

      if($request->file('photo')){      
      $extension = $request->file('photo')->getClientOriginalExtension();
      $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
      $request->file('photo')->storeAs('photo', $newName);
      }

      $request['image'] = $newName;
      $pegawai = Pegawai::create($request->all());

      if ($pegawai) {
        Session::flash('status', 'success');
        Session::flash('message', 'add new pegawai succes!');
      }

      return redirect('/pegawai');
    }
    public function edit(Request $request, $id)
    {
      $pegawai = Pegawai::findOrFail($id);
      $class = ClassGol::where('id', '!=', $pegawai->class_id)->get(['id', 'name']);
      return view('pegawai-edit', ['pegawai' => $pegawai, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
      $pegawai = Pegawai::findOrFail($id);
      
      // $pegawai->name = $request->name;
      // $pegawai->nip = $request->nip;
      // $pegawai->gender = $request->gender;
      // $pegawai->class_id = $request->class_id;
      // $pegawai->save();

      $pegawai->update($request->all());
      return redirect('/pegawai');
    }

    public function delete($id)
    {
      $pegawai = Pegawai::findOrFail($id);
      return view('pegawai-delete', ['pegawai' => $pegawai]);
    }

    public function destroy($id)
    {
      $deletedPegawai = Pegawai::findOrFail($id);
      $deletedPegawai->delete();

      if ($deletedPegawai) {
        Session::flash('status', 'success');
        Session::flash('message', 'delete pegawai succes!');
      }

      return redirect('/pegawai');
    }
 
        // $nilai = [9,8,7,6,4,8,9,2,1,9,10];

        //collection method
        //1. hitung rata rata nilai
        // $nilaiRata = collect($nilai)->avg();
        // dd($nilaiRata);

        //contains = cek apakah sebuah array memiliki sesuatu
        // $aaa = collect($nilai)->contains(function($value){
        //     return $value < 6;
        // });
        // dd($aaa);

        //filter =menyaring data yang dibutuhkan
        // $aaa = collect($nilai)->filter(function($value){
        //     return $value > 7;
        // })->all();

        // dd($aaa);

        //map = perulangan
        //mencari tahu hasil dari nilai dikali 2 dari data yang di array $nilai
        // $nilaiKaliDua = [];
        // foreach ($nilai as $value) {
        //     array_push($nilaiKaliDua, $value * 2);
        // }

        // dd($nilaiKaliDua);

        // $aaa = collect($nilai)->map(function($value){
        //     return $value * 2;
        // })->all();
        // dd($aaa);


        //pluck = mengambil sebuah data dalam array yang dibutuhkan
        // $biodata = [
        //     ['nama' => 'budi', 'umur' => 17],
        //     ['nama' => 'ani', 'umur' => 16],
        //     ['nama' => 'siti', 'umur' => 17],
        //     ['nama' => 'rudi', 'umur' => 20],
        // ];

        // $aaa = collect($biodata)->pluck('nama')->all();
        // dd($aaa);

        //diff = cek apakah ada data yang sama/tidak sama diantara 2 array
        // $warkopA = ["kopi", "bubur", "susu jahe", "milo"];
        // $warkopB = ["bubur", "kopi", "teh tarik", "usus"];

        // //cek menu apakah yang tidak ada di warkop masing masing
        // $menuWarkopA = collect($warkopA)->diff($warkopB);
        // $menuWarkopB = collect($warkopB)->diff($warkopA);
        // dd($menuWarkopB);

        // query builder
        // $pegawai = DB::table('pegawai')->get();
        // dd($pegawai);

        //insert data
        // DB::table('pegawai')->insert([
        //     'name' => 'query builder',
        //     'nip' => '130720001',
        //     'gender' => 'Laki-Laki',
        //     'class_id' => 1
        // ]);

        //update table
        // DB::table('pegawai')->where('id', 26)->update([
        //     'name' => 'query builder 1',
        //     'class_id' => 3
        // ]);

        //delete table
        // DB::table('pegawai')->where('id', 26)->delete();

        //eloquent
        // $pegawai = Pegawai::all();
        // dd($pegawai);

        //update table
        // Pegawai::find(27)->update([
        //     'name' => 'eloquent 2',
        //     'class_id' => 1
        // ]);

        //delete table
        // Pegawai::find(28)->delete();

        //insert data
        // Pegawai::create([
        //     'name' => 'eloquent',
        //     'nip' => '170620001',
        //     'gender' => 'Perempuan',
        //     'class_id' => 2
        // ]);
}