@extends('layout.inputlayout')
@section('content')
<div class="container">
    <form id="addForm" action="#" method="post">
        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="student_name" placeholder="Student Name">
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
        $('#addForm').on('submit', function(e) {
            e.preventDefault();
            //alert($("#addForm").find("#student_name").val())
            $.ajax({
                url:'/student',
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    firstname: $("#addForm").find("#student_name").val(),
                    lastname: "Boonrerng",
                    birthdate: "",
                    faculty_id: ""
                },
                success:function(response) {
                    alert(response)
                }
            })
        })
    })
</script>
@endsection