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
@if(Session('upgrpitem'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('upgrpitem')}}</strong>
    </div>
@endif

@if(Session('delgrpitem'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('delgrpitem')}}</strong>
    </div>
@endif

@if(Session('savesubgrpitem_success'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('savesubgrpitem_success')}}</strong>
    </div>
@endif

@if(Session('delsubgrpitem'))
    <div class="alert alert-danger text-center" style="width: 50%;height: 50%">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('delsubgrpitem')}}</strong>
    </div>
@endif

@if(Session('img_success'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('img_success')}}</strong>
    </div>
@endif
@if(Session('pro_success'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('pro_success')}}</strong>
    </div>
@endif
@if(Session('cart'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('cart')}}</strong>
    </div>
@endif
@if(Session('sticky_error'))
<div class="alert alert-danger text-center">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{Session('sticky_error')}}</strong>
</div>
@endif

