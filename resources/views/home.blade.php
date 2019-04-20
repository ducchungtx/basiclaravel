@extends('layouts.app')
@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores fugiat sunt quisquam nobis iste facilis perspiciatis eligendi rerum debitis. Velit magni possimus ullam incidunt, quaerat facere rerum consequuntur consequatur dicta.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection