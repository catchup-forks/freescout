<ul class="sidebar-menu">
    <li @if (Route::currentRouteName() == 'mailboxes.update')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-envelope"></i> {{ __('Edit Mailbox') }}</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.connection')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-cog"></i> {{ __('Connection Settings') }} (todo)</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.permissions')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-ok"></i> {{ __('Permissions') }} (todo)</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.fields')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-list"></i> {{ __('Custom Fields') }} (todo)</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.autoreply')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-share"></i> {{ __('Auto Reply') }} (todo)</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.savedreplies')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-floppy-save"></i> {{ __('Saved Replies') }} (todo)</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.workflows')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-random"></i> {{ __('Workflows') }} (todo)</a></li>
    <li @if (Route::currentRouteName() == 'mailboxes.ratings')class="active"@endif><a href="{{ route('mailboxes.update', ['id'=>$mailbox->id]) }}"><i class="glyphicon glyphicon-thumbs-up"></i> {{ __('Sat. Ratings') }} (todo)</a></li>
   
</ul>