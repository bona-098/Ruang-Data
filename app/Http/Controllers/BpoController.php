<?php

namespace App\Http\Controllers;

    use App\Models\Bpo;
    use Illuminate\Http\Request;

    class BpoController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            return view('bsrm.calon_bpo.index');
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
         * @param  \App\Models\Bpo  $bpo
         * @return \Illuminate\Http\Response
         */
        public function show(Bpo $bpo)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Bpo  $bpo
         * @return \Illuminate\Http\Response
         */
        public function edit(Bpo $bpo)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Bpo  $bpo
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Bpo $bpo)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Bpo  $bpo
         * @return \Illuminate\Http\Response
         */
        public function destroy(Bpo $bpo)
        {
            //
        }
    }
