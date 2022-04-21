<tr>
    <td class="text-center align-middle">{{$user->first_name .' '. $user->last_name}}</td>
    <td class="text-center align-middle">{{$user->birth_date}}</td>
    <td class="text-center align-middle">{{$user->email}}</td>
    <td class="text-center align-middle">{{$user->country->name}}</td>
    <td class="text-center align-middle">
        @foreach($user->bicycles as $bicycle)
            <p class="m-2">{{$bicycle->brand.' - '.$bicycle->model}}</p>
        @endforeach
    </td>
</tr>
