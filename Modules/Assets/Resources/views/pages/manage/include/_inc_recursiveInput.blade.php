{{-- Parameter enter: $data, $parentId, $note --}}

@foreach ($data as $item)
    @if($item->parentId== $parentId)
        <option value="{{ $item->id }}"> {{ $note.$item->name }} </option>
        @include('assets::pages.category.include._inc_recursiveInput',[
            'companies' => $data,
            'parentId' =>$item->id,
            'note' => $note.'--',
        ])
    @endif
@endforeach