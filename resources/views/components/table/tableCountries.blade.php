<div class="container">
    @component('components.title.title',['text' => 'COUNTRIES'])
    @endcomponent
    <table class="table border rounded table-striped">
        @component('components.table.header',['headerData' => ['Name']])
        @endcomponent
        @foreach($countries as $country)
            @component('components.table.row',['rowData' => [
                'name' => $country->name
            ]])
            @endcomponent
        @endforeach
    </table>
</div>
