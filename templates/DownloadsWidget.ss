<% if $Files %>
<ul>
    <% loop  $Files %>
    <li>
        <a href="$URL">$Title</a>
    </li>
    <% end_loop %>
</ul>
<% end_if %>