import argparse
import csv
import math

parser = argparse.ArgumentParser()
parser.add_argument("file_name", action="store")
args = parser.parse_args()


def isNotInt(s):
    try:
        int(s)
        return False
    except ValueError:
        return True


def isNotFloat(s):
    try:
        float(s)
        return False
    except ValueError:
        return True


with open(args.file_name, "r") as f:
    reader = csv.reader(f)
    travel_details = []
    cities = []
    for row in reader:
        if len(row) != 3 or isNotInt(row[0]) or isNotFloat(row[1]) or isNotFloat(row[2]) or float(row[2]) < 0:
            print("File format incorrect")
            exit(1)
        travel_details.append([int(row[0]) - 1, float(row[1]), float(row[2])])
        cities.append(int(row[0]))
    if len(cities) != 500 or len(set(cities)) != 500 or max(cities) > 500 or min(cities) < 1:
        print("File format incorrect")
        exit(1)


with open("cities.csv", "r") as f:
    reader = csv.reader(f)
    cities_coordinates = []
    for row in reader:
        cities_coordinates.append([float(val) for val in row])


with open("actual_lb_price.csv", "r") as f:
    reader = csv.reader(f)
    actual_bid_price = []
    for row in reader:
        actual_bid_price.append(float(row[0]))


def distance(present_city, next_city):
    x1 = present_city[0]
    x2 = next_city[0]
    y1 = present_city[1]
    y2 = next_city[1]
    return math.sqrt((x1 - x2) * (x1 - x2) + (y1 - y2) * (y1 - y2))


money_spent = 0
tank_capacity = 30
agents_price = 0.6
current_petrol = 0
mileage = 10.0

for i in range(len(travel_details)):
    present_city_detail = travel_details[i]
    present_city_number = present_city_detail[0]
    bid = present_city_detail[1]
    petrol_asked = present_city_detail[2]
    if i + 1 < len(travel_details):
        next_city_number = travel_details[i + 1][0]
    else:
        next_city_number = travel_details[0][0]

    if bid >= actual_bid_price[present_city_number]:
        money_spent += bid * petrol_asked
        current_petrol = min(tank_capacity, current_petrol + petrol_asked)

    distance_to_next = distance(cities_coordinates[present_city_number], cities_coordinates[next_city_number])
    distance_can_be_travelled = current_petrol * mileage
    if distance_can_be_travelled >= distance_to_next:
        current_petrol -= distance_to_next / mileage
    else:
        distance_to_next -= distance_can_be_travelled
        current_petrol = 0
        money_spent += distance_to_next * agents_price
print("%f" % money_spent)