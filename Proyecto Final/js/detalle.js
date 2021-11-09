<section>
    <div class="media">
      <img src="<%= result['imageUrl'] %>" class="mr-3">
      <div class="media-body">
        <h5 class="mt-0">
          <a href="<%= result['detailPageURL'] %>"><%= result['title'] %></a>
        </h5>

        Price: <%= result['price'] %> <br>
        List Price: <%= result['listPrice'] %> <br>
        Rating: <%= result['rating'] %>/5 <br>
        Prime: <%= result['isPrimeEligible'] ? 'Yes' : 'No' %>
        
      </div>
    </div>

    <hr>
  <% end %>
</section>