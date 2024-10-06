<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFffRequest;
use App\Http\Requests\UpdateFffRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Fff;
use Illuminate\Http\Request;
use Flash;
use Response;

class FffController extends AppBaseController
{
    /**
     * Display a listing of the Fff.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Fff $fffs */
        $fffs = Fff::paginate(10);

        return view('fffs.index')
            ->with('fffs', $fffs);
    }

    /**
     * Show the form for creating a new Fff.
     *
     * @return Response
     */
    public function create()
    {
        return view('fffs.create');
    }

    /**
     * Store a newly created Fff in storage.
     *
     * @param CreateFffRequest $request
     *
     * @return Response
     */
    public function store(CreateFffRequest $request)
    {
        $input = $request->all();

        /** @var Fff $fff */
        $fff = Fff::create($input);

        Flash::success('Fff saved successfully.');

        return redirect(route('fffs.index'));
    }

    /**
     * Display the specified Fff.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Fff $fff */
        $fff = Fff::find($id);

        if (empty($fff)) {
            Flash::error('Fff not found');

            return redirect(route('fffs.index'));
        }

        return view('fffs.show')->with('fff', $fff);
    }

    /**
     * Show the form for editing the specified Fff.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Fff $fff */
        $fff = Fff::find($id);

        if (empty($fff)) {
            Flash::error('Fff not found');

            return redirect(route('fffs.index'));
        }

        return view('fffs.edit')->with('fff', $fff);
    }

    /**
     * Update the specified Fff in storage.
     *
     * @param int $id
     * @param UpdateFffRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFffRequest $request)
    {
        /** @var Fff $fff */
        $fff = Fff::find($id);

        if (empty($fff)) {
            Flash::error('Fff not found');

            return redirect(route('fffs.index'));
        }

        $fff->fill($request->all());
        $fff->save();

        Flash::success('Fff updated successfully.');

        return redirect(route('fffs.index'));
    }

    /**
     * Remove the specified Fff from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Fff $fff */
        $fff = Fff::find($id);

        if (empty($fff)) {
            Flash::error('Fff not found');

            return redirect(route('fffs.index'));
        }

        $fff->delete();

        Flash::success('Fff deleted successfully.');

        return redirect(route('fffs.index'));
    }
}
