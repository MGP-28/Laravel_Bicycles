<div class="container">
    @component('components.title.title',['text' => 'BICYCLES'])
    @endcomponent
    <table class="table border rounded table-striped">
        @component('components.table.header',['headerData' => ['Brand','Model','Color','Price','Owner']])
        @endcomponent
        @foreach($bicycles as $bicycle)
            @component('components.table.row',['rowData' => [
                'Brand' => $bicycle->brand,
                'Model' => $bicycle->model,
                'Color' => $bicycle->color,
                'Price' => $bicycle->price,
                'Owner' => $bicycle->user->first_name .' ' .$bicycle->user->last_name
            ]])
            @endcomponent
        @endforeach
    </table>
</div>
