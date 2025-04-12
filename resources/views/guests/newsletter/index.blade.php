<x-guest-layout>
<div class="container">
    <h1>Subscribed Emails</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Subscribed On</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribers as $subscriber)
            <tr>
                <td>{{ $subscriber->id }}</td>
                <td>{{ $subscriber->email }}</td>
                <td>{{ $subscriber->created_at->format('M d, Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $subscribers->links() }} <!-- Pagination links -->
</div>
</x-guest-layout>