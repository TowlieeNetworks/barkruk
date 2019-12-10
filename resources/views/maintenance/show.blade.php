<h1>Storing {{ $malfunction->id }}</h1>
<p>broken product {{ $malfunction->broken_product }}</p>
<p> description {{ $malfunction->description }}</p>
<p> Preferred date {{ $malfunction->preferred_date }}</p>
<p> created at {{ $malfunction->created_at }}</p>

<a href="{{ route('work_order.show', $id ) }}">fill out work order</a>