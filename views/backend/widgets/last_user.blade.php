@inject('last_user', 'Whole\Core\Injections\LastUsersInjection')


<div class="col-md-5 col-lg-5">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light" style="height: 100%;">
        <div class="portlet-title">
            <div class="caption font-green-haze" style="width: 100%;">
                <i class="icon-users font-green-haze"></i>
                <span class="caption-subject bold uppercase">{{ trans('whole::widgets_last_user.title') }}</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="">
                    <thead>
                    <tr>
                        <th>{{ trans('whole::widgets_last_user.th_title_1') }}</th>
                        <th>{{ trans('whole::widgets_last_user.th_title_2') }}</th>
                        <th>{{ trans('whole::widgets_last_user.th_title_3') }}</th>
                        <th>{{ trans('whole::widgets_last_user.th_title_4') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($last_user->lastUsers() as $user)
                        <tr class="odd gradeX">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ isset($user->roles->first()->role_name)?$user->roles->first()->role_name:"Grup Seçilmemiş" }}</td>
                            <td>
                                <a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> {{ trans('whole::widgets_last_user.edit') }}</a>
                                <a href="{{ route('admin.user.destroy',$user->id) }}" class="btn btn-danger btn-sm" data-method="delete"> <i class="fa fa-trash"></i> {{ trans('whole::widgets_last_user.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@section('include_css')
    @parent
    @include('backend::_layouts._table_css')
@endsection

@section('include_js')
    @parent
    @include('backend::_layouts._table_js')
@endsection