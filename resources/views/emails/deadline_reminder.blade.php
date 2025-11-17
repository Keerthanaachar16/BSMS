<p>Hello {{ $complaint->officials()->first()->name }},</p>
<p>You were assigned complaint #{{ $complaint->id }}. The deadline has passed.</p>
<p>Please take action immediately (Resolve or Mark Irrelevant).</p>