<tbody>
    </tr>
    <center>
        <td>
            <div onclick="location.href='{{route('Orders.order', $order)}}'" style="cursor: pointer;">
                {{ $order->id }}
            </div>
        </td>
        <td>
            <div onclick="location.href='{{route('Orders.order', $order)}}'" style="cursor: pointer;">
                {{ $order->name }}
            </div>
        </td>
        <td>
            <div onclick="location.href='{{route('Orders.order', $order)}}'" style="cursor: pointer;">
                {{ $order->address }}
            </div>
        </td>
        <td>
            <div onclick="location.href='{{route('Orders.order', $order)}}'" style="cursor: pointer;">
                {{ $order->total ?? 0 }}
            </div>
        </td>
        <td>
            <select wire:model="status">
                @if($order->status === 'ongoing')
                <option value="ongoing">ONGOING</option>
                <option value="completed">COMPLETED</option>
                @elseif($order->status='completed')
                <option value="completed">COMPLETED</option>
                <option value="ongoing">ONGOING</option>
                @endif
            </select>
        </td>
        @if(auth()->user()->hasPosition('admin') || auth()->user()->hasPosition('cashier'))
        <td>
            <div style="color: white; background-color: black; cursor: pointer;" wire:click="destroy">x</div>
        </td>
        @endif
    </center>
    </tr>
</tbody>
