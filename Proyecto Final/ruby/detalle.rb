# Gemfile
source "https://rubygems.org"
gem "sinatra"
gem "excon"

# app.rb
require 'sinatra'
get '/' do
  erb :index, layout: :default
end

# busqueda de productos
get '/search' do
    query = URI.encode(params['query'])
    url = "https://amazon-price1.p.rapidapi.com/search?keywords=#{query}&marketplace=US"
    response = Excon.get(
      url,
      headers: {
        'X-RapidAPI-Host' => URI.parse(url).host,
        'X-RapidAPI-Key' => 'YOUR API KEY'
      }
    )
    results = JSON.parse(response.body)
    erb :results, layout: :default, locals: { results: results }
  end