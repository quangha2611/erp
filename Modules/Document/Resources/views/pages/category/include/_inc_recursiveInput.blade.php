{{-- Parameter enter: $data, $parentId, $note and $currentItem in edit form --}}

{{-- in edit form has parentId --}}
@if( isset($currentItem) )
    @foreach ($data as $item)
        @if($item->parentId == $parentId && $item->id != $currentItem->id)
            @if($item->id == $currentItem->parentId)
                <option value="{{ $item->id }}" selected> {{ $note.$item->name }} </option>
            @else
                <option value="{{ $item->id }}"> {{ $note.$item->name }} </option>
            @endif
            @include('assets::pages.category.include._inc_recursiveInput',[
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
            @include('assets::pages.category.include._inc_recursiveInput',[
                'data' => $data,
                'parentId' =>$item->id,
                'note' => $note.'--',
            ])
        @endif
    @endforeach
@endif