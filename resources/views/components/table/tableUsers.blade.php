<div class="container">
    @component('components.title.title',['text' => 'USERS'])
    @endcomponent
    <table class="table border rounded table-striped">
        @component('components.table.header',['headerData' => ['Name','Birth date','E-mail','Country','Bicycles']])
        @endcomponent
        @foreach($users as $user)
            @component('components.table.rowUsers',['user' => $user])
            @endcomponent
        @endforeach
    </table>
</div>
