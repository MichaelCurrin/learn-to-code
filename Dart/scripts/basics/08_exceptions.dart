// To raise an exception, use throw:

if (astronauts == 0) {
  throw StateError('No astronauts.');
}

// To catch an exception, use a try statement with on or catch (or both):

try {
  for (var object in flybyObjects) {
    var description = await File('$object.txt').readAsString();
    print(description);
  }
} on IOException catch (e) {
  print('Could not describe object: $e');
} finally {
  flybyObjects.clear();
}

// Note that the code above is asynchronous; try works for both synchronous code and code in an async function.
