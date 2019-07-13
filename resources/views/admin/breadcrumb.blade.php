<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="m-0 text-dark float-left"
                    style="margin-right: 10px !important;">{{ isset($data['page_title']) ? $data['page_title'] : '' }}</h1>
                @isset($data['breadcrumbs'])
                    <ol class="breadcrumb float-left" style="line-height: 34px">
                        @foreach ($data['breadcrumbs'] as $breadcrumb)
                            <li class="breadcrumb-item {{ $breadcrumb['active'] ? 'active' : '' }}">
                                @if($breadcrumb['active'])
                                    {{ $breadcrumb['title']  }}
                                @else
                                    <a href="{{ route($breadcrumb['router']) }}">{{ $breadcrumb['title']  }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                @endisset
            </div><!-- /.col -->
            <div class="col-sm-4 text-right">
                @isset($data['actions'])
                    @foreach ($data['actions'] as $action)
                        @if($action['tag'] == "a")
                            <a class="{{ $action['className'] }}" id="{{ $action['id'] }}" href="{{ $action['href'] }}">{{ $action['text'] }}</a>
                        @else
                            <button class="{{ $action['className'] }}" id="{{ $action['id'] }}" data-form="#{{ $action['form'] }}">{{ $action['text'] }}</button>
                        @endif
                    @endforeach
                @endisset
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>