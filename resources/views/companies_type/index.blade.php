<x-layout>
    <h1>Companies Type</h1>
    <a href="/companies_type/create">[+]</a>
    <table border="1">
        <tr><th>Name</th><th>Description</th></tr>
        @foreach($companies_type->all() as $this_company)
            <tr>
                <td>{{$this_company->name}}</td>
                <td>{{$this_company->description}}</td>
            </tr>
        @endforeach 
    </table>
</x-layout>
        
