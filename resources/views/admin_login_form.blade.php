<div align="center">
    <form method="POST" action="{{ url('admin/login') }}">
        {!! csrf_field() !!}
            <table>
                <tr>
                    <td>Your Name</td>
                    <td><input type="text" name="name" value="{{ old('name') }}"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>     
            </table>
        <button type="submit">Login</button>
    </form>
</div>