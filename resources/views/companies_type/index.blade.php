<x-layout>
    <h1>Companies Type</h1>
    <a href="/companies_type/create">[+]</a>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($companies_type->all() as $this_company)
            <tr>
                <td>{{$this_company->name}}</td>
                <td>{{$this_company->description}}</td>
                <!-- 
                pass array 
                -->
                <td>
                    <a href="{{route('companies_type.update', ['company_data' => $this_company->id])}}">
                        Edit
                    </a>
                </td>
                <td>
                <form method="post" action="{{route('companies_type.destroy', [ 'company_data' => $this_company->id ])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" name="Delete" value="Delete">
                </form>
                </td>
            </tr>
        @endforeach 
    </table>
</x-layout>
        
