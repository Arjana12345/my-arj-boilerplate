<x-layout>
    <h1>My home</h1>
    <table border ="4">
        <tr><th>Name</th><th>Area</th></tr>
        @foreach($people as $this_candidate)
        <tr>
            <td>
                <a href="/home/people/{{$this_candidate['id']}}">
                {{$this_candidate['name']}}</a>
            </td>
            <td>{{$this_candidate['area']}}</td>
            
        </tr>
        @endforeach
    </table>
</x-layout>
        
