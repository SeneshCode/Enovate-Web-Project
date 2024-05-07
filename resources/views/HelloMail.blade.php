<div style="">
    <h1 style="color:blue;">Enovate Contact by {{  $enoData['c_name'] }}</h1>

    <div class="">
        <table class="table" border="1" style="padding: 1px;">

                <tbody>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of Customer </th>
                        <td style="padding: 8px;color:green;">{{  $enoData['c_name'] }}</td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of email </th>
                        <td style="padding: 8px;">    {{  $enoData['email'] }}
                        </td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of subject </th>
                        <td style="padding: 8px;">{{  $enoData['subject'] }}</td>
                    </tr>
                    <tr>
                        <th scope="col" style="padding: 8px;">Name of Customer</th>
                        <td style="padding: 8px;">{{  $enoData['message'] }}</td>
                    </tr>
                </tbody>
        </table>
    </div>

</div>
