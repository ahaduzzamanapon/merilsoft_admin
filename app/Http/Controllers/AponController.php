<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAponRequest;
use App\Http\Requests\UpdateAponRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Apon;
use Illuminate\Http\Request;
use Flash;
use Response;

class AponController extends AppBaseController
{
    /**
     * Display a listing of the Apon.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Apon $apons */
        $apons = Apon::paginate(10);

        return view('apons.index')
            ->with('apons', $apons);
    }

    /**
     * Show the form for creating a new Apon.
     *
     * @return Response
     */
    public function create()
    {
        return view('apons.create');
    }

    /**
     * Store a newly created Apon in storage.
     *
     * @param CreateAponRequest $request
     *
     * @return Response
     */
    public function store(CreateAponRequest $request)
    {
        $input = $request->all();

        /** @var Apon $apon */
        $apon = Apon::create($input);

        Flash::success('Apon saved successfully.');

        return redirect(route('apons.index'));
    }

    /**
     * Display the specified Apon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Apon $apon */
        $apon = Apon::find($id);

        if (empty($apon)) {
            Flash::error('Apon not found');

            return redirect(route('apons.index'));
        }

        return view('apons.show')->with('apon', $apon);
    }

    /**
     * Show the form for editing the specified Apon.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Apon $apon */
        $apon = Apon::find($id);

        if (empty($apon)) {
            Flash::error('Apon not found');

            return redirect(route('apons.index'));
        }

        return view('apons.edit')->with('apon', $apon);
    }

    /**
     * Update the specified Apon in storage.
     *
     * @param int $id
     * @param UpdateAponRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAponRequest $request)
    {
        /** @var Apon $apon */
        $apon = Apon::find($id);

        if (empty($apon)) {
            Flash::error('Apon not found');

            return redirect(route('apons.index'));
        }

        $apon->fill($request->all());
        $apon->save();

        Flash::success('Apon updated successfully.');

        return redirect(route('apons.index'));
    }

    /**
     * Remove the specified Apon from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Apon $apon */
        $apon = Apon::find($id);

        if (empty($apon)) {
            Flash::error('Apon not found');

            return redirect(route('apons.index'));
        }

        $apon->delete();

        Flash::success('Apon deleted successfully.');

        return redirect(route('apons.index'));
    }
}
