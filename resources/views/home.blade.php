@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <h2>
                            @role('admin', true)
                                Welcome Admin
                            @else
                                Welcome User
                            @endrole
                        </h2>

                        <p>
                        You are logged in!
                        </p>

                        @role('admin')
                            <p>
                                Blade Has Admin
                            </p>
                        @endrole

                        @level(5)
                            <p>
                                User has level 5 or higher
                            </p>
                        @endlevel

                        @permission('view.users')
                            <p>
                                Has view users permissions
                            </p>
                        @endpermission

                        @permission('create.users')
                            <p>
                                Has create users permissions
                            </p>
                        @endpermission

                        @permission('edit.users')
                            <p>
                                Has edit users permissions
                            </p>
                        @endpermission

                        @permission('delete.users')
                            <p>
                                Has delete users permissions
                            </p>
                        @endpermission


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
