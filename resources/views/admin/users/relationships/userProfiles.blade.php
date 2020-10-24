@can('profile_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.profiles.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.profile.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.profile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-userProfiles">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.user') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $key => $profile)
                        <tr data-entry-id="{{ $profile->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $profile->id ?? '' }}
                            </td>
                            <td>
                                {{ $profile->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $profile->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $profile->user->name ?? '' }}
                            </td>
                            <td>
                                @can('profile_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.profiles.show', $profile->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('profile_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.profiles.edit', $profile->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('profile_delete')
                                    <form action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('profile_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.profiles.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-userProfiles:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection