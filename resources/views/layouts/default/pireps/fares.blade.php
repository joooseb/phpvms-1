@if($aircraft)
    <div class="form-container">
        <h6><i class="fas fa-ellipsis-h"></i>
            &nbsp;Fares
        </h6>
        <div class="form-container-body">
            @foreach($aircraft->subfleet->fares as $fare)
                <div class="row">
                    <div class="col">
                        {{Form::label('fare_'.$fare->id, $fare->name.' ('.$fare->code.')')}}
                        @if($pirep->read_only)
                            <p>{{ $pirep->{'fare_'.$fare->id} }}</p>
                            {{ Form::hidden('fare_'.$fare->id) }}
                        @else
                            <div class="input-group form-group">
                                {{ Form::number('fare_'.$fare->id, null, ['class' => 'form-control', 'min' => 0]) }}
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
