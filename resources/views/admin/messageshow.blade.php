@if(Session('add_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('add_success')}}</strong>
    </div>
@endif
@if(Session('update_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('update_success')}}</strong>
    </div>
@endif
@if(Session('active-category'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('active-category')}}</strong>
    </div>
@endif
@if(Session('inactive-category'))
    <div class="alert alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('inactive-category')}}</strong>
    </div>
@endif
@if(Session('delete-category'))
    <div class="alert alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('delete-category')}}</strong>
    </div>
@endif
@if(Session('save-groupitem'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('save-groupitem')}}</strong>
    </div>
@endif

