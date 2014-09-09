<% if $Downloads %>
<ul>
    <% loop  $Downloads  %>
    <li>
        <a href="$Me.URL">$Me.Title</a>
    </li>
    <% end_loop %>
</ul>
<% end_if %>