import matplotlib.pyplot
X = range(1, 50)
Y = [value * 3 for value in X]
print("Values of X:")
print(*range(1,50)) 
print("Values of Y (thrice of X):")
print(Y)
# Plot lines and/or markers to the Axes.
matplotlib.pyplot.plot(X, Y)
# Set the x axis label of the current axis.
matplotlib.pyplot.xlabel('x - axis')
# Set the y axis label of the current axis.
matplotlib.pyplot.ylabel('y - axis')
# Set a title 
matplotlib.pyplot.title('Draw a line.')
# Display the figure.
matplotlib.pyplot.show()