@include('users.header')




<div class="graph-visual tables-main">
											
												<div class="graph">
                                                <h2 class="inner-tittle">Basic Table</h2>
														<div class="tables">
																
																<table class="table">
																	<thead>
																		<tr>
																		
																		  <th> title</th>
																		  <th>content</th>
                                                                          <th>	price</th>
                                                                          <th>image</th>
                                                                          <th>created_at</th>
                                                                          <th>controller</th>
																		</tr>
                                                                    </thead>
                                                              
																	<tbody>
																		<tr>
                                @foreach($post->post as $post)
																		 
                                                                          <td>{{$post->title}}</td>
																		  <td>{{$post->content}}</td>
                                                                          <td>{{$post->price}}</td>
                                                                          <td>{{$post->image}}</td>
                                                                          <td>{{$post->created_at}}</td>
                                                                          <td><a href="{{url('profile/edit/'.$post->id)}}">Edit</a>
                                                                          <a href="{{url('profile/delete/'.$post->id)}}">Delet</a>
                                                                        </td>
                                                                        </th>
																		</tr>
															@endforeach
                                                                    </tbody>
                                                                 
																</table>
															</div>
												
                                                </div>
















@include('users.footer')