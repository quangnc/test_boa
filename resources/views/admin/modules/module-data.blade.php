@foreach ($data['module_data'] as $m)
    @if ($m['code'] == $module['code'] && !isset($module['unique']))
        <tr>
            <td style="padding-left: 40px"><i class="fa fa-folder-open"></i> {{ $m['name'] }}</td>
            <td></td>
            <td class="text-right">
                <form id="delete-{{$m['module_id']}}"
                      action="{{ route('module.destroy', ['id'=>$m['module_id']]) }}"
                      method="post">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <a class="btn btn-danger pull-right"
                            onclick="confirm('Are you sure?') ? $('#delete-{{$m['module_id']}}').submit() : false;">
                        <i class="fa fa-trash"></i>
                    </a>
                </form>
                <a style="margin-right: 5px"
                   href="{{ route('module.edit', ['id'=>$m['module_id'], 'code' => $module['code']]) }}"
                   class="btn btn-primary pull-right">
                    <i class="fa fa-pencil"></i>
                </a>
            </td>
        </tr>
    @endif
@endforeach

