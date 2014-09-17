<% if $Files %>
<ul>
    <% loop  $Files %>
    <li>
        <a href="$File.URL">$Title</a>
    </li>
    <% end_loop %>
</ul>
<% end_if %>