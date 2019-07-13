<tr>
    <td><b>{{ $module['name'] }}</b></td>
    <td></td>
    @if (isset($module['unique']) && $module['unique'] && isset($module['module']))
        <td class="text-right">
            <a style="margin-right: 5px"
               href="{{ route('module.edit', ['id'=>$module['module']->module_id, 'code' => $module['module']->code]) }}"
               class="btn btn-primary pull-right">
                <i class="fa fa-pencil"></i>
            </a>
        </td>
    @else
        <td class="text-right">
            <a style="margin-right: 5px"
               href="{{ route('module.create', ['code'=>$module['code']]) }}"
               class="btn btn-primary pull-right">
                <i class="fa fa-plus-circle"></i>
            </a>
        </td>
    @endif
</tr>