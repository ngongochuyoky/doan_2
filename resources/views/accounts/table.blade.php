<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>User_id</th>
                <th>gender</th>
                <th>date_of_birth</th>
                <th>phone</th>
                <th>city</th>
                <th>country_id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>{!! $account->user_id !!}</td>
                <td>{!! $account->gender !!}</td>
                <td>{!! $account->date_of_birth !!}</td>
                <td>{!! $account->phone !!}</td>
                <td>{!! $account->city !!}</td>
                <td>{!! $account->country_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('accounts.show', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
