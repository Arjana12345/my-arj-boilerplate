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
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr style="border: 1px solid black; padding: 8px;">
            <th style="border: 1px solid black; padding: 8px;">Name</th>
            <th style="border: 1px solid black; padding: 8px;">Description</th>
            <th style="border: 1px solid black; padding: 8px;">Edit</th>
            <th style="border: 1px solid black; padding: 8px;">Delete</th>
        </tr>
        @foreach($companies_type->all() as $this_company)
            <tr style="border: 1px solid black; padding: 8px;">
                <td style="border: 1px solid black; padding: 8px;">{{$this_company->name}}</td>
                <td style="border: 1px solid black; padding: 8px;">{{$this_company->description}}</td>
                <!-- 
                pass array 
                -->
                <td style="border: 1px solid black; padding: 8px;">
                    <a href="{{route('companies_type.update', ['company_data' => $this_company->id])}}">
                        Edit
                    </a>
                </td>
                <td style="border: 1px solid black; padding: 8px;">
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
        
