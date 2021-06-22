@extends('admin.layout.master')

@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Input Types</h4>
            <p class="text-muted mb-4 font-14">
                Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                        <form class="form-horizontal" role="form">
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="simpleinput">Text</label>
                                <div class="col-sm-10">
                                    <input type="text" id="simpleinput" class="form-control" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-password">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" id="example-password" class="form-control" value="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-placeholder">Placeholder</label>
                                <div class="col-sm-10">
                                    <input type="text" id="example-placeholder" class="form-control" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-textarea">Text area</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Readonly</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Disabled</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" disabled="" value="Disabled value">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-static">Static control</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-helping">Helping text</label>
                                <div class="col-sm-10">
                                    <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Input Select</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <h6>Multiple select</h6>
                                    <select multiple class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-fileinput">Default file input</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="example-fileinput">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-date">Date</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-month">Month</label>
                                <div class="col-md-10">
                                    <input class="form-control" id="example-month" type="month" name="month">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-time">Time</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="time" name="time" id="example-time">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-week">Week</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="week" name="week" id="example-week">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-number">Number</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="number" id="example-number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="url" name="url">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Search</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="search" name="search">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Tel</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="tel" name="tel">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-color">Color</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="color" name="color" value="#71b6f9" id="example-color">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-sm-2  col-form-label" for="example-range">Range</label>
                                <div class="col-md-10">
                                    <input class="custom-range" type="range" name="range" min="0" max="10" id="example-range">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>

@endsection
