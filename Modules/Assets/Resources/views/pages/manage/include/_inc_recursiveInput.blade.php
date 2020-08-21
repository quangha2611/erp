{{-- Parameter enter: $data, $parentId, $note --}}

@foreach ($data as $item)
    @if($item->parentId == $parentId)
        <option value="{{ $item->id }}"> {{ $note.$item->name }} </option>
        @include('assets::pages.manage.include._inc_recursiveInput',[
            'data' => $data,
            'parentId' =>$item->id,
            'note' => $note.'--',
        ])
    @endif
@endforeach