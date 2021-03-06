@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-3">Company</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Website</td>
                        <td>Logo</td>
                        <td colspan = 2>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->website}}</td>
                            @if(is_null($company->logo))
                                <td>No Logo</td>
                            @else
                                <td><img style="display:block;" width="32px" height="32px" src="{{config('app.url') . '/storage/' .$company->logo}}" /></td>
                            @endif
                            <td>
                                <a href="{{ route('companies.edit',$company->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('companies.destroy', $company->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div>
                </div>
            </div>
        </div>
    </div>
@endsection
