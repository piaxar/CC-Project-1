@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin/stats') }}">@lang('dashboard.stats_link')</a>
                    @endauth
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('dashboard.dashboard')</div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <table class="table">
                                <tr>
                                    <th>@lang('dashboard.course_field')</th>
                                    <th>@lang('dashboard.os_field')</th>
                                    <th>@lang('dashboard.language_field')</th>
                                    <th>@lang('dashboard.experience_field')</th>
                                    <th>@lang('dashboard.code_field')</th>
                                </tr>
                                <?php
                                use App\Survey;
                                $entities = Survey::all();
                                ?>
                                @foreach($entities as $entity)
                                    <tr class="table-bordered">
                                        <td>
                                            {{ $entity->course_id }}
                                        </td>
                                        <td>
                                            {{ $entity->os }}
                                        </td>
                                        <td>
                                            {{ $entity->programming_lang}}
                                        </td>
                                        <td>
                                            {{ $entity->experience }}
                                        </td>
                                        <td>
                                            {{ $entity->code }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
