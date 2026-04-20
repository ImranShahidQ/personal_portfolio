@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Contact Messages</h2>

    <table width="100%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        @forelse($messages as $message)
        <tr>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td class="action-buttons">
                <a href="{{ route('admin.contacts.show', $message->id) }}" title="View">
                    <i class="fas fa-eye"></i>
                </a>
                <form action="{{ route('admin.contacts.destroy', $message->id) }}" method="POST" style="display:inline;" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">No messages found</td>
        </tr>
        @endforelse
    </table>
</div>
@endsection
