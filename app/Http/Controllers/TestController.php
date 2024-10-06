<?php

namespace App\Http\Controllers;

use App\DataTables\TestDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Models\Test;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TestController extends AppBaseController
{
    /**
     * Display a listing of the Test.
     *
     * @param TestDataTable $testDataTable
     * @return Response
     */
    public function index(TestDataTable $testDataTable)
    {
        return $testDataTable->render('tests.index');
    }

    /**
     * Show the form for creating a new Test.
     *
     * @return Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created Test in storage.
     *
     * @param CreateTestRequest $request
     *
     * @return Response
     */
    public function store(CreateTestRequest $request)
    {
        $input = $request->all();

        /** @var Test $test */
        $test = Test::create($input);

        Flash::success('Test saved successfully.');

        return redirect(route('tests.index'));
    }

    /**
     * Display the specified Test.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Test $test */
        $test = Test::find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        return view('tests.show')->with('test', $test);
    }

    /**
     * Show the form for editing the specified Test.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Test $test */
        $test = Test::find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        return view('tests.edit')->with('test', $test);
    }

    /**
     * Update the specified Test in storage.
     *
     * @param  int              $id
     * @param UpdateTestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestRequest $request)
    {
        /** @var Test $test */
        $test = Test::find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        $test->fill($request->all());
        $test->save();

        Flash::success('Test updated successfully.');

        return redirect(route('tests.index'));
    }

    /**
     * Remove the specified Test from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Test $test */
        $test = Test::find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        $test->delete();

        Flash::success('Test deleted successfully.');

        return redirect(route('tests.index'));
    }
}
