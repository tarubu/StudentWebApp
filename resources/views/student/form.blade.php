@extends('layout.inputlayout')
@section('content')
<div class="container">
    <form id="addForm" action="#" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
    "use strict";
    $(document).ready(function() {
        $('#addFrom').on('submit', function(e) {
            $.ajax({
                url:'/student',
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            })
        })
    })
</script>
@endsection