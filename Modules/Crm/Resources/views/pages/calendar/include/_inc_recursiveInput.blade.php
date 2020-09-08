{{-- Parameter enter: $data, $parentId, $note and $currentItem in edit form --}}

{{-- in edit form has parentId --}}
@if( isset($currentItem) )
    @foreach ($data as $item)
        @if($item->parentId == $parentId)
            @if($item->id == $currentItem['id'])
                <option value="{{ $item->id }}" selected> {{ $note.$item->name }} </option>
            @else
                <option value="{{ $item->id }}"> {{ $note.$item->name }} </option>
            @endif
            @include('crm::pages.calendar.include._inc_recursiveInput',[
                'data' => $data,
                'parentId' =>$item->id,
                'note' => $note.'--',
            ])
        @endif
    @endforeach
@else
    @foreach ($data as $item)
        @if($item->parentId == $parentId)
            <option value="{{ $item->id }}"> {{ $note.$item->name }} </option>
            @include('crm::pages.calendar.include._inc_recursiveInput',[
                'data' => $data,
                'parentId' =>$item->id,
                'note' => $note.'--',
            ])
        @endif
    @endforeach
@endif